<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EmployeeModel;
class EmployeeController extends BaseController
{
    protected $employeeModel;
    public function __construct()
    {
        //make a global object of model to access it in every function
        $this->is_allowed();
        $this->employeeModel = new EmployeeModel();
    }
    public function index()
    {
        //The index page of employee
        //Data retrive from the database through model

        $allEmployee = $this->employeeModel->findAll();

        $employeeData['allEmployee'] = $allEmployee;
        
        //sent it to the view file 
        return view('employee/index',$employeeData);
    }
    public function create()
    {
        // The view page for the creation
        
        return view('employee/create');
    }
    public function store(){
        
        $data   = $this->request->getPost([
            'name',
            'address',
            'designation',
            'salary'
            ]);

        $picture = $this->request->getFile('picture');

        //Check if the picture is valid or not and moved or not
        
        if($picture && $picture->isValid() && !$picture->hasMoved())
        {
            $newName = $picture->getRandomName();
            $picture->move(ROOTPATH.'public/upload/image',$newName);
            $imagePath = 'upload/image/'.$newName;
        }
        $data['picture'] = $imagePath;

        //save the data into db through model object 
        $this->employeeModel->save($data);
        return redirect()->to('/employee/index');


    }
    public function edit($id){
        $data['employee_details'] = $this->employeeModel->find($id);
        
        return view('employee/edit',$data);

    }
    public function update(){
         $data = $this->request->getPost([
            'id',
            'name',
            'address',
            'designation',
            'salary'
            
        ]);
        $file = $this->request->getFile('new_image');
        $imagePath = $this->request->getPost('old_image');
        if($file->isValid() && !$file->hasMoved()){

            //Delete the pervious image from folder
            
            if($imagePath && file_exists(FCPATH . $imagePath)){
                unlink(FCPATH . $imagePath);
            } 
            $newImage  = $file->getRandomName();
            $file->move(ROOTPATH.'public/upload/image',$newImage);
            $imagePath = 'upload/image/'.$newImage;
            

        }
       
        $data['picture']= $imagePath;
        $this->employeeModel->save($data);
        return redirect()->to('/employee/index');
        
    }
    public function destroy($id){
        $delete_data = $this->employeeModel->find($id);
        if(file_exists(FCPATH.$delete_data['picture'])){
             unlink(FCPATH.$delete_data['picture']);
        }
       
        $this->employeeModel->delete($id);
        return redirect()->to('/employee/index');

    }

}

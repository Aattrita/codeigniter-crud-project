<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function index()
    {
        //Send to the view file
        // $this->load->helper('form');
        return view('login/form');
    }
    public function check()
    {
        $validation = $this->validate([
            'email_id' => [
                'rules' => 'required|valid_email|is_not_unique[login_details.email_id]',
                'error' => [
                    'required' => "Email Field Required",
                    'valid_email' => "Not a valid email",
                    'is_not_unique' => "Email not registered",
                ]
            ],
            'username' => [
                'rules' => 'required',
                'error' => [
                    'require' => "Username is required"
                ]
            ],
            'password' => [
                'rules' => 'required',
                'error' => [
                    'require' => "Password Field required"
                ]
            ],

        ]);
        if(!$validation){
            return  view('login/form',['validation => $this->validator']);
        }
        else {
            $email_id = $this->request->getPost('email_id');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $loginModel = new LoginModel();
            $loginInfo = $loginModel->where('email_id',$email_id)->first();

            $checkPassword  = password_verify($password,$loginInfo['password']);
            if(!$checkPassword){
                return redirect()->to('/');
            }
            else{
                return redirect()->to('employee/index');
            }
        }
    }
}

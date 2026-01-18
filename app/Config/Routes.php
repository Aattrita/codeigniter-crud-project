<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\EmployeeController;

/**
 * @var RouteCollection $routes
 */
//Log-in Routes
$routes->get('/', 'LoginController::index');
$routes->post('login','LoginController::check');

//Employee Routes
$routes->group('employee',['filter'=>'auth'],function($routes){
    $routes->get('index', 'EmployeeController::index');
    $routes->get('create','EmployeeController::create',['as' => 'employee.create']);
    $routes->post('store','EmployeeController::store',['as' => 'employee.store']);
    $routes->get('edit/(:num)','EmployeeController::edit/$1',['as'=>'employee.edit']);
    $routes->get('delete/(:num)','EmployeeController::destroy/$1',['as'=>'employee.delete']);
    $routes->post('update','EmployeeController::update',['as' => 'employee.update']);
});


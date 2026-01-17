<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\EmployeeController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
$routes->post('login','LoginController::check');
$routes->get('employee/index', 'EmployeeController::index');
$routes->get('employee','EmployeeController::create');
$routes->post('employee','EmployeeController::store');
$routes->get('employee/edit/(:num)','EmployeeController::edit/$1',['as'=>'employee/edit']);
$routes->get('employee/delete/(:num)','EmployeeController::destroy/$1',['as'=>'employee/delete']);
$routes->post('employee/update','EmployeeController::update');
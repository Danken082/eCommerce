<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/nice', 'MainController::nice');
$routes->get('signup', 'UserController::signUp');
$routes->post('register', 'UserController::register');
$routes->post('/UserController/login', 'UserController::loginAuth');
$routes->get('signin', 'UserController::signIn');
$routes->get('/fasion', 'MainController::fasion');
$routes->get('/electronic', 'MainController::electronic');
$routes->get('/jewelry', 'MainController::jewelry');
$routes->get('dashboard','DashboardController::dashboard');
$routes->get('chart','DashboardController::chart');
$routes->get('widgets','DashboardController::widget');
$routes->get('tables','DashboardController::table');
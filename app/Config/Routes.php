<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/view', 'MainController::nice');
$routes->get('signup', 'UserController::signUp');
$routes->match(['get','post'],'/UserController/store', 'UserController::store');
$routes->match(['get', 'post'],'/SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/fasion', 'MainController::fasion');
$routes->get('/electronic', 'MainController::electronic');
$routes->get('/jewelry', 'MainController::jewelry');
$routes->get('dashboard','DashboardController::dashboard');
$routes->get('chart','DashboardController::chart');
$routes->get('widgets','DashboardController::widget');
$routes->get('tables','DashboardController::table');
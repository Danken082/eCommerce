<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/nice', 'MainController::nice');
$routes->get('signup', 'UserController::signUp');
$routes->post('register', 'UserController::register');
$routes->get('go', 'UserController::login');
$routes->get('signin', 'UserController::singIn');
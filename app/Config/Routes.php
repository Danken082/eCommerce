<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/nice', 'MainController::nice');
$routes->get('signup', 'UserController::dan');
$routes->post('register', 'UserController::register');
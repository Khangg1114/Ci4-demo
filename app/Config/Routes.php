<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'Users::index');
$routes->get('users/create', 'Users::create');
$routes->post('users/store', 'Users::store');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/update', 'Users::update');
$routes->get('users/delete/(:num)', 'Users::delete/$1');
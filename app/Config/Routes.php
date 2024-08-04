<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Tasks::read',['filter' => 'auth:admin']);
$routes->post('/tasks/create', 'Tasks::create',['filter' => 'auth:admin']);

$routes->match(['get','post'],'auth','Auth::login');
$routes->get('logout','Logout::index');


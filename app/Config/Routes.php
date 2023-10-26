<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile/(:any)/(:any)', 'UserController::profile/$1/$2');

#form
$routes->get ('/user/profile', [UserController::class, 'profile']);
$routes->get ('/user/create', [UserController::class, 'create']);
$routes->post ('/user/store', [UserController::class, 'store']);
$routes->get ('/user', [UserController::class, 'index']);
$routes->get('user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('user/(:any)', [UserController::class, 'update']);
$routes->get('user/(:any)', [UserController::class, 'show']);
$routes->delete('user/(:any)', [UserController::class, 'destroy']);

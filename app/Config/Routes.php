<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\KelasController;

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

$routes->get('kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes->post ('/kelas/store', [KelasController::class, 'store']);
$routes->get ('/kelas/create', [KelasController::class, 'create']);
$routes->get ('/kelas', [KelasController::class, 'index']);
$routes->delete('kelas/(:any)', [KelasController::class, 'destroy']);
$routes->put('kelas/(:any)', [KelasController::class, 'update']);
$routes->get('kelas/(:any)', [KelasController::class, 'show']);


<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'AuthController::index');
$routes->post('/loginAction', 'AuthController::loginAction');
$routes->get('/register', 'AuthController::register');
$routes->post('/register_action', 'AuthController::registerAction');
$routes->get('/logout', 'AuthController::logout');

$routes->group('admin', ['filter' => 'auth'], function($routes){
$routes->get('dashboard', 'AdminController::dashboard');
$routes->post('update-status/(:num)', 'AdminController::updateStatus/$1');
});
$routes->get('/', 'Home::index');
$routes->view('keranjang', 'v_keranjang');
$routes->view('menu', 'v_menu');
$routes->view('reservasi', 'v_reservasi');
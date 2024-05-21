<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('login/', 'Home::login');

$routes->get('auth/login', 'AuthController::login');

$routes->post('auth/process', 'AuthController::process');

$routes->get('auth/logout', 'AuthController::logout');

$routes->get('hasil-lab/', 'HasilLabController::showByDate', ['filter' => 'authGuard']);

// $routes->get('register/', 'Auth::register');

// $routes->get('index1/', 'Home::index1');

$routes->get('hasil-lab/showAllData', 'HasilLabController::showAllData', ['filter' => 'authGuard']);

$routes->get('hasil-lab/getLabResults/(:any)', 'HasilLabController::getLabResults/$1');

// $routes->post('hasil-lab/search', 'HasilLabController::search', ['filter' => 'authGuard']);

// $routes->get('hasil-lab/', 'HasilLabController::showByDate');

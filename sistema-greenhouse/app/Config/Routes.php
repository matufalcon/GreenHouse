<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/consultar-cabanas', 'Home::consultar_cabañas');
$routes->post('/consultar-cabanas', 'Cabaña::ver_cabañas');

$routes->get('detalles-cabana/(:num)', 'Cabaña::detalles/$1');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');

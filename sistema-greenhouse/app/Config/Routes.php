<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/reservar', 'Home::reservar');
$routes->post('/reservar', 'Cabaña::ver_cabañas');

$routes->get('detalles-cabana/(:num)', 'Cabaña::detalles/$1');

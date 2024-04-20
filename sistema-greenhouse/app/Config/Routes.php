<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/inicio', 'Home::index');
$routes->get('/reservar', 'Home::reservar');

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

/*Iniciar sesion */
$routes->get('/login', 'Usuario::createLogin');
$routes->post('/login', 'Usuario::login');
/*Registrarse */
$routes->get('/register', 'Usuario::createRegister');
$routes->post('/register', 'Usuario::register');
$routes->get('/logout', 'Usuario::logout');

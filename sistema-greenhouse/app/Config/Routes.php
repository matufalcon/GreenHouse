<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/explorar-cabanas', 'Home::consultar_cabañas');
$routes->post('/explorar-cabanas', 'Cabaña::ver_cabañas');
$routes->get('/detalles-cabana/(:num)', 'Cabaña::detalles/$1');
$routes->get('/realizar-reserva/(:num)', 'Reserva::create/$1');
$routes->post('/realizar-reserva/(:num)', 'Reserva::realizarReserva/$1');

/*Iniciar sesion */
$routes->get('/login', 'Usuario::createLogin');
$routes->post('/login', 'Usuario::login');
/*Registrarse */
$routes->get('/register', 'Usuario::createRegister');
$routes->post('/register', 'Usuario::register');
$routes->get('/logout', 'Usuario::logout');

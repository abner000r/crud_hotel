<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('reservacion','ReservacionController::index');
$routes->get('nueva_reservacion','ReservacionController::nuevasReservas');
$routes->post('agregar_reservacion','ReservacionController::agregarReservacion');


$routes->get('hoteles','HotelesController::index');
$routes->get('nuevos_hoteles','HotelesController::nuevosHoteles');
$routes->post('agregar_hoteles','HotelesController::agregarHoteles');


$routes->get('clientes','ClientesController::index');
$routes->get('nuevos_clientes','ClientesController::nuevosClientes');
$routes->post('agregar_clientes','ClientesController::agregarClientes');

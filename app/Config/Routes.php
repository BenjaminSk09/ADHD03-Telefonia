<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//la ruta esta compuesta por ruta, controlador::metodo
$routes->get('planes','PlanesController::index');
$routes->get('clientes','ClientesController::index');
$routes->get('lineas','LineasTelefonicasController::index');
//boton de eliminar
$routes->get('eliminar_plan/(:num)','PlanesController::eliminarPlan/$1');
$routes->get('buscar_plan/(:num)','PlanesController::buscarPlan/$1');
$routes->post('modificar_plan','PlanesController::modificarPlan');
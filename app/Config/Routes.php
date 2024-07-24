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
$routes->get('nuevo_plan','PlanesController::nuevoPlan');    
$routes->post('agregar_plan','PlanesController::agregarPlan');


$routes->get('eliminar_linea/(:num)','LineasTelefonicasController::eliminarLineas/$1');
$routes->get('buscar_linea/(:num)','LineasTelefonicasController::buscarLineas/$1');
$routes->post('modificar_linea', 'LineasTelefonicasController::modificarLineas');
$routes->get('nueva_linea','LineasTelefonicasController::nuevalinea');
$routes->post('agregar_linea', 'LineasTelefonicasController::agregarLinea');

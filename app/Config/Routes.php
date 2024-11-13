<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Login
$routes->get('/usuario','loginController::index');
$routes->get('/usuario/salir','loginController::salir');
$routes->post('/usuario/acceder','loginController::acceder');



//Docente

$routes->get('/docente', 'DocenteController::index');
$routes->get('/docente/add','DocenteController::add');
$routes->post('/docente/insert','DocenteController::insert');
$routes->get('/docente/edit/(:num)','DocenteController::edit/$1');
$routes->post('/docente/update/','DocenteController::update');
$routes->get('/docente/delete/(:num)','DocenteController::delete/$1');


//Materias
$routes->get('/materias', 'MateriasController::index');
$routes->get('/materias/add','MateriasController::add');
$routes->post('/materias/insert','MateriasController::insert');
$routes->get('/materias/edit/(:num)','MateriasController::edit/$1');
$routes->post('/materias/update/','MateriasController::update');
$routes->get('/materias/delete/(:num)','MateriasController::delete/$1');

//Software
$routes->get('/software', 'SoftwareController::index');
$routes->get('/software/add', 'SoftwareController::add');
$routes->post('/software/insert', 'SoftwareController::insert');
$routes->get('/software/edit/(:num)', 'SoftwareController::edit/$1');
$routes->post('/software/update/', 'SoftwareController::update');


$routes->get('/software/delete/(:num)', 'SoftwareController::delete/$1');



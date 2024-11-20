<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Login

$routes->get('/usuario','Usuario::index');
$routes->get('/usuario/salir','Usuario::salir');
$routes->post('/usuario/acceder','Usuario::acceder');
$routes->get('/usuario/perfil','Usuario::perfil');
$routes->post('/usuario/registrarUsuario(:num)', 'Usuario::registrarUsuario/$1');
$routes->post('/usuario/registrarUsuario', 'Usuario::registrarUsuario');

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


//Manuales
$routes->get('/manuales', 'ManualesController::index');
$routes->get('/manuales/add', 'ManualesController::add');
$routes->post('/manuales/insert', 'ManualesController::insert');
$routes->get('/manuales/edit/(:num)', 'ManualesController::edit/$1');
$routes->post('/manuales/update/', 'ManualesController::update');
$routes->get('/manuales/delete/(:num)', 'ManualesController::delete/$1');

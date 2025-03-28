<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/flow', 'Flow::index');
$routes->get('/seventeen', 'Seventeen::index');
// $routes->get('/table', 'Table::index');
$routes->get('/table', 'Table::table');

$routes->view('/flow/calendar', 'flow/calendar');
$routes->view('/flow/notes-folder', 'flow/notes-folder');
$routes->view('/flow/schedule', 'flow/schedule');
$routes->view('/flow/tasks', 'flow/tasks');

$routes->view('/flow/focus-mode', 'flow/focus-mode');
$routes->view('/flow/notes-imk', 'flow/notes-imk');
$routes->view('/flow/podomoro-mode', 'flow/podomoro-mode');
$routes->view('/flow/schedule-overview', 'flow/schedule-overview');
$routes->view('/flow/notes-structure-plane', 'flow/notes-structure-plane');

$routes->get('/flow/focus-mode', 'TimerController::index');
$routes->post('/flow/timer-on', 'TimerController::countdown');
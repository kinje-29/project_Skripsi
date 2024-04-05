<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');

$routes->get('/pages/data_guru', 'Pages::data_guru');
$routes->get('/pages/mata_pelajaran', 'Pages::mata_pelajaran');
$routes->get('/pages/kelas', 'Pages::kelas');
$routes->get('/pages/data_ruangan', 'Pages::data_ruangan');
$routes->get('/pages/jadwal_hari', 'Pages::jadwal_hari');
$routes->get('/pages/create', 'Pages::create');
$routes->post('/pages/save', 'Pages::save');


$routes->get('/pages/(:segment)', 'Pages::detail/$1');


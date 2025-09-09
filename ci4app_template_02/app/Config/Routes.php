<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa/display_mahasiswa', 'Mahasiswa::display_mahasiswa');
$routes->get('/mahasiswa/detail_mahasiswa/(:segment)', 'Mahasiswa::detail_mahasiswa/$1');



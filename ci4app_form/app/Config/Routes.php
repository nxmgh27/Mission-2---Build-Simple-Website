<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');
$routes->get('/home', 'Home::index');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::loginPost');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

$routes->get('mahasiswa/display_mahasiswa', 'Mahasiswa::display_mahasiswa');
$routes->get('mahasiswa/create', 'Mahasiswa::create');
$routes->post('mahasiswa/store', 'Mahasiswa::store');
$routes->get('mahasiswa/detail/(:segment)', 'Mahasiswa::detail_mahasiswa/$1');


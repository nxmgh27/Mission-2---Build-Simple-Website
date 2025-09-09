<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');
$routes->get('/home', 'Home::index');
$routes->get('/mahasiswa/display_mahasiswa', 'Mahasiswa::display_mahasiswa');
$routes->get('/mahasiswa/detail_mahasiswa/(:segment)', 'Mahasiswa::detail_mahasiswa/$1');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::loginPost');
$routes->get('/auth/logout', 'Auth::logout');

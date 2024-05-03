<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

#CRUD Produk routes
$routes->group('produk', function($routes) {
    $routes->post('/', 'ProdukController::create');
    $routes->get('/', 'ProdukController::list');
    $routes->get('(:segment)', 'ProdukController::detail/$1');
    $routes->put('(:segment)', 'ProdukController::ubah/$1');
    $routes->delete('(:segment)', 'ProdukController::hapus/$1');
});

#CRUD Jasa routes
$routes->group('jasa', function($routes) {
    $routes->post('/', 'JasaController::create');
    $routes->get('/', 'JasaController::list');
    $routes->get('(:segment)', 'JasaController::detail/$1');
    $routes->put('(:segment)', 'JasaController::ubah/$1');
    $routes->delete('(:segment)', 'JasaController::hapus/$1');
});

#CRUD Pelanggan routes
$routes->group('pelanggan', function($routes) {
    $routes->post('/', 'PelangganController::create');
    $routes->get('/', 'PelangganController::list');
    $routes->get('(:segment)', 'PelangganController::detail/$1');
    $routes->put('(:segment)', 'PelangganController::ubah/$1');
    $routes->delete('(:segment)', 'PelangganController::hapus/$1');
});

#CRUD Pegawai routes
$routes->group('pegawai', function($routes) {
    $routes->post('/', 'PegawaiController::create');
    $routes->get('/', 'PegawaiController::list');
    $routes->get('(:segment)', 'PegawaiController::detail/$1');
    $routes->put('(:segment)', 'PegawaiController::ubah/$1');
    $routes->delete('(:segment)', 'PegawaiController::hapus/$1');
});
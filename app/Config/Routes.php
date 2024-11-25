<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('auth', 'Auth::index');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/ajaxlogin', 'Auth::ajaxLogin');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('/', 'Home::index',['filter' => 'auth']);
$routes->get('home', 'Home::index',['filter' => 'auth']);
$routes->post('update', 'Home::update',['filter' => 'auth']);



$routes->group("display", ["filter" => "auth"], function ($routes) {
    $routes->get('', 'Display::index');
    $routes->get('progresschart', 'Display::progresschart');
    $routes->get('suara', 'Display::suara');
    $routes->get('progres', 'Display::progres');
    $routes->get('progrescalon', 'Display::progrescalon');
    $routes->get('vto', 'Display::vto');
    $routes->get('progrestps', 'Display::progrestps');
    $routes->get('kecamatan/(:num)', 'Display::kecamatan/$1');
    $routes->get('kelurahan/(:num)', 'Display::kelurahan/$1');
    $routes->get('tps/(:num)', 'Display::tps/$1');
 });

    $routes->get('home', 'Home::index');

    $routes->group("distribusi", ["filter" => "adminauth"], function ($routes) {
        $routes->get('', 'Distribusi::index');
        $routes->get('zona', 'Distribusi::index');
        $routes->get('kecamatan/(:num)', 'Distribusi::kecamatan/$1');
        $routes->get('kelurahan/(:num)', 'Distribusi::kelurahan/$1');
        $routes->get('tps/(:num)', 'Distribusi::tps/$1');
        $routes->get('searchrelawan/(:any)', 'Ajax::searchrelawan/$1');
        $routes->get('getrelawan/(:any)', 'Ajax::detailRelawan/$1');
     });

    $routes->group("data", ["filter" => "adminauth"], function ($routes) {
        $routes->get('', 'Data::index');
        $routes->post('', 'Data::update');
        $routes->post('add', 'Data::add');
        $routes->get('getdata/(:num)', 'Data::getdata/$1');
     });
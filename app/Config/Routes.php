<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('auth', 'Auth::index');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/ajaxlogin', 'Auth::ajaxLogin');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('admin/auth', 'Admin\Auth::index');
$routes->get('admin/auth/login', 'Admin\Auth::login');
$routes->post('admin/auth/ajaxlogin', 'Admin\Auth::ajaxLogin');
$routes->get('admin/auth/logout', 'Admin\Auth::logout');

$routes->get('/', 'Home::index',['filter' => 'auth']);
$routes->get('home', 'Home::index',['filter' => 'auth']);
$routes->post('update', 'Home::update',['filter' => 'auth']);

$routes->get('display', 'Display::index',['filter' => 'auth']);
$routes->get('display/progresschart', 'Display::progresschart',['filter' => 'auth']);
$routes->get('display/suara', 'Display::suara',['filter' => 'auth']);
$routes->get('display/progres', 'Display::progres',['filter' => 'auth']);
$routes->get('display/vto', 'Display::vto',['filter' => 'auth']);
$routes->get('display/kecamatan/(:num)', 'Display::kecamatan/$1',['filter' => 'auth']);
$routes->get('display/kelurahan/(:num)', 'Display::kelurahan/$1',['filter' => 'auth']);
$routes->get('display/tps/(:num)', 'Display::tps/$1',['filter' => 'auth']);

$routes->get('user', 'User\Home::index',['filter' => 'auth']);


$routes->group("admin", ["filter" => "adminauth"], function ($routes) {

    $routes->get('', 'Admin\Home::index');
    $routes->get('home', 'Admin\Home::index');

    $routes->group("distribusi", function ($routes) {
        $routes->get('', 'Admin\Distribusi::index');
        $routes->get('zona', 'Admin\Distribusi::index');
        $routes->get('kecamatan/(:num)', 'Admin\Distribusi::kecamatan/$1');
        $routes->get('kelurahan/(:num)', 'Admin\Distribusi::kelurahan/$1');
        $routes->get('tps/(:num)', 'Admin\Distribusi::tps/$1');
        $routes->get('searchrelawan/(:any)', 'Ajax::searchrelawan/$1');
        $routes->get('getrelawan/(:any)', 'Ajax::detailRelawan/$1');
     });

    $routes->group("data", function ($routes) {
        $routes->get('', 'Admin\Data::index');
        $routes->post('', 'Admin\Data::update');
        $routes->get('getdata/(:num)', 'Admin\Data::getdata/$1');
     });
 });
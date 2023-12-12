<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/course', 'Course::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');

/**
 * Admin routing
 */
$routes->group('admin', ['namespace' => 'App\Controllers\Admins'], function (RouteCollection $routes) {
    $routes->get('login', 'Auth::index');
    $routes->post('login', 'Auth::login');

    $routes->get('logout', 'Auth::logout', ['filter' => 'auth']);

    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

    $routes->get('product', 'Product::index', ['filter' => 'auth']);
    $routes->get('product/add', 'Product::show_add_page', ['filter' => 'auth']);
    $routes->get('product/delete', 'Product::delete', ['filter' => 'auth']);
    $routes->post('product/add', 'Product::insert', ['filter' => 'auth']);
    $routes->get('product/edit/(:segment)', 'Product::show_edit_page/$1', ['filter' => 'auth']);
    $routes->post('product/update/(:segment)', 'Product::update/$1', ['filter' => 'auth']);
});
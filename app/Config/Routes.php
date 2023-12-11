<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/course', 'Course::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
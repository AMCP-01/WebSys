<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('about', 'aboutController::about');
$routes->get('customer', 'customerController::customer');
$routes->get('user', 'userController::user');
$routes->get('pages', 'pagesController::pages');
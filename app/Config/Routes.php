<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('HomePage', 'Dashbord::dashbord');
$routes->post('ajout', 'Home::insertion');
$routes->post('login', 'Home::authetification');


// $routes->get('HomePage/(:num)', 'Home::dashbord/$1');
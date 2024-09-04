<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('register', 'Home::register');
$routes->post('authentificationRegister', 'Home::authentificationRegister');
$routes->post('authentificationLogin', 'Home::authentificationLogin');


$routes->get("Dashbord", 'Dashbord::index');








// $routes->get('HomePage', 'Dashbord::dashbord');
// $routes->post('ajout', 'Home::insertion');
// $routes->post('login', 'Home::authetification');


// $routes->get('HomePage/(:num)', 'Home::dashbord/$1');
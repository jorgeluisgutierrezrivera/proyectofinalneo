<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('codeigniter', 'Home::code');
//$routes->get('usuarios', 'Usuarios::index');
$routes->presenter('usuarios');
<?php

/**
 * Web Routes Definition
 *
 * Maps HTTP routes to controllers and actions.
 */

/** @var \App\Core\Router $router */
$router->get('/', 'HomeController@index');
$router->get('/destinations', 'DestinationController@index');
$router->get('/packages', 'PackageController@index');
$router->get('/about', 'AboutController@index');
$router->get('/contact', 'ContactController@index');

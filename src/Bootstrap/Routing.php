<?php

/**
 * Use this file to implement your router.
 * You can include your routes directly here or put in another separate file such as ROUTES.PHP
 */

// get routes from config
// returns an array of routes in the format:
// '/about' => [
    //  'controller' => 'HomeController',
    //  'method' => 'index'
//]
// you can modify its behavior in Routes.yaml to return the routes, however, you prefer
$routes = $config->getConfig('routes');

// implement your routing below.

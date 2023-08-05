<?php

/**
 * Use this file to load the application
 */

// require path constants
require_once __DIR__ . '/Paths.php';

// require composer autoloader
require_once VENDOR_PATH . 'autoload.php';

// require environment variables; use any component to handle environment variables
// e.g. $dotenv = new Dotenv\Dotenv(ROOT_PATH);
//      $dotenv->load();

// set any debugger or error handler
// e.g., \Tracy\Debugger::enable();

// load the config (returns values from src\Config\Config.yaml on using get($key); can use dot notation)
$config = (new \Config\Config());

// all the dependencies and error handler to be put in separate file
require_once SRC_PATH . 'Bootstrap' . DS . 'Dependencies.php';

// all the routing-related stuff go in Routing.php
require_once SRC_PATH . 'Bootstrap' . DS . 'Routing.php';

// run the app below if you have to below
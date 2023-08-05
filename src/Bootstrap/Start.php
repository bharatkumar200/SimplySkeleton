<?php

/**
 * Use this file to load the application
 */

// require path constants
use SimplyDi\Skeleton\Config\Config;

require_once __DIR__ . '/Paths.php';

// require composer autoloader
require_once VENDOR_PATH . 'autoload.php';

// require environment variables; use any component to handle environment variables
// e.g. $dotenv = new Dotenv\Dotenv(ROOT_PATH);
//      $dotenv->load();

// set any debugger or error handler
// e.g., \Tracy\Debugger::enable();

// Below, you can define your dependencies with a dependency container
// and implement your routing system in their separate files.
// Or, just implement them in this Start.php only
// and remove the lines including Routing.php and Dependencies.php;
// it's your choice

// load the config (returns values from src\SimplyDi\Skeleton\Config\Config.yaml on using get($key); can use dot notation)
$config = (new Config(CONFIG_PATH));

// all the dependencies and error handler to be put in separate file
require_once BOOTSTRAP_PATH . 'Dependencies.php';

// all the routing-related stuff go in Routing.php
require_once BOOTSTRAP_PATH . 'Routing.php';

// run the app below if you have to below
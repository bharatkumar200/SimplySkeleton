<?php

// command tools

use SimplyDi\Skeleton\Command\MakeController;

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

// register commands

# create controller: modify it to the path where your code is present
$application->add(new MakeController(__DIR__ . '/src/Modules/'));

$application->run();

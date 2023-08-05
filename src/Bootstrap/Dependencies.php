<?php

/**
 * Use this file to initiate your dependency injector if you want to
 * and return the injector
 *
 * In case you don't want to use DI, simple comment or remove the line in Start.php that includes this file
 */

// get the array of dependencies from Config.yaml
$dependencies = $config->get('dependencies');

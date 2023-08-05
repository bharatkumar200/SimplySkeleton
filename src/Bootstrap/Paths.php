<?php

/**
 * This file contains path constants used throughout the application.
 */

const DS = DIRECTORY_SEPARATOR;

define('SRC_PATH', dirname(__DIR__) . DS);

define('ROOT_PATH', dirname(SRC_PATH) . DS);

const PUBLIC_PATH = ROOT_PATH . 'public' . DS;

const VENDOR_PATH = ROOT_PATH . 'vendor' . DS;


const TEMP_PATH = ROOT_PATH . 'temp' . DS;

const VIEWS_PATH = SRC_PATH . 'Views' . DS;

const BOOTSTRAP_PATH = SRC_PATH . 'Bootstrap' . DS;

const CONFIG_PATH = SRC_PATH . 'Config' . DS;
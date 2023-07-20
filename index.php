<?php

/**
 * Define current path 
 * also you cant change it to config path
 */
define("CURRPATH", __DIR__ . DIRECTORY_SEPARATOR);

// Check the current path are exist
chdir(CURRPATH);

/**
 * Require your path file
 * this line must be changed depend on your folder structure
 */
require CURRPATH . '/config/Paths.php';

// Put the Paths in variable
$paths = new Config\Paths;

require CURRPATH . $paths->configDirectory . 'Application.php';

define("CONFPATH", $paths->configDirectory);

// Check the current path are exist
chdir(CONFPATH);

$app = new Config\Application;
$app->run();

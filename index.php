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

// Call the Application for running the program
require CURRPATH . $paths->app;

// Initiate
$app = new Config\Application;
$err = $app->run($paths);

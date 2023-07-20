<?php

namespace Config;

use Config\Load;
use Config\Paths;
use Config\Routes;

class Application
{

    /**
     * -------------------------------------------------------------------
     * RUN PROGRAM
     * -------------------------------------------------------------------
     * This maps the locations of any namespaces in your application to
     * their location on the file system. These are used by the autoloader
     * to locate files the first time they have been instantiated.
     *
     * @var
     */
    public function run()
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);

        $this->definePath();

        /**
         * Configures aliases for Filter classes to
         * make reading things nicer and simpler.
         *
         * @var array
         */
        require __DIR__ . DIRECTORY_SEPARATOR . 'Load.php';
        $load = new Load;

        /**
         * Configures aliases for Filter classes to
         * make reading things nicer and simpler.
         *
         * @var
         */
        foreach ($load->files as $value) {
            require JUMPUP . $value . PHPEXT;
        }

        // Execute program
        $route = new Routes;
        $server = new Server(URI);

        $server->setDefaultEndpoint('Home');
        $server->setDefaultMethod('index');

        foreach ($route->route as $r) {
            if (implode($server->uri) == $r[0]) {
                $server->requireRoute($r);
            }
        }
    }

    function baseurl()
    {
    }

    function definePath()
    {
        /**
         * Configures aliases for Filter classes to
         * make reading things nicer and simpler.
         *
         * @var obj
         */
        $paths = new Paths;
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('VIEWSPATH', $paths->viewsDirectory);
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('ROUTESPATH', $paths->routesDirectory);
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('CONNPATH', $paths->connectionDirectory);
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('URI', $paths->requesturi);
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('SEPARATOR', '/');
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('JUMPUP', '../');
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('PHPEXT', '.php');
        /**
         * ---------------------------------------------------------------
         * SYSTEM FOLDER NAME
         * ---------------------------------------------------------------
         *
         * This must contain the name of your "system" folder. Include
         * the path if the folder is not in the same directory as this file.
         *
         * @var string
         */
        define('BASEURL', $paths->baseurl);
    }
}

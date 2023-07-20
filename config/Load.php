<?php

namespace Config;

class Load
{
    /**
     * -------------------------------------------------------------------
     * Namespaces
     * -------------------------------------------------------------------
     * This maps the locations of any namespaces in your application to
     * their location on the file system. These are used by the autoloader
     * to locate files the first time they have been instantiated.
     *
     * @var array<string, string>
     */
    public $files = [
        // 'APP_NAMESPACE' => CONFPATH, // For custom app namespace
        'LIBS' => CONFPATH  . 'Library',
        'SERVER' => CONFPATH . 'Server',
        'ROUTES' => CONFPATH . 'Routes',
        'CONNECTION' => CONFPATH . CONNPATH . 'Connection',
        'VIEWS' => CONFPATH . ROUTESPATH . 'Views',
        'COMPOSER' => 'vendor/autoload',
    ];
}

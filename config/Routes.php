<?php

namespace Config;

class Routes
{
    /**
     * -------------------------------------------------------------------
     * Routes
     * -------------------------------------------------------------------
     * This maps the locations of any namespaces in your application to
     * their location on the file system. These are used by the autoloader
     * to locate files the first time they have been instantiated.
     *
     * @var array
     */
    public $route = [
        ['/home', 'Home:index'],
        ['/pembayaran', 'Pembayaran:index'],
        ['/login', 'Login:index'],
    ];
}

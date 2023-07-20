<?php

namespace Config;

class Routes
{
    /**
     * -------------------------------------------------------------------
     * Routes
     * -------------------------------------------------------------------
     * This maps the locations of any namespaces in your application to
     * their location on the file routes.
     *
     * @var array
     */
    public $route = [
        ['/home', 'Home:index'],
        ['/pembayaran', 'Pembayaran:index'],
        ['/login', 'Login:index'],
        ['/auth', 'Login:auth'],
    ];
}

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
        ['/logout', 'Login:logout'],
        ['/sign-in', 'Login:signIn'],
        ['/auth', 'Login:auth'],
        ['/penggunaan', 'penggunaan:index'],
        ['/pelanggan', 'pelanggan:index'],
        
        ['/error', 'ErrorRedirect:init'],
    ];
}

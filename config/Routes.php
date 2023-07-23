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
        ['/tarif', 'Tarif:index'],
        ['/login', 'Login:index'],
        ['/logout', 'Login:logout'],
        ['/sign-in', 'Login:signIn'],
        ['/auth', 'Login:auth'],
        ['/penggunaan', 'penggunaan:index'],
        ['/pelanggan', 'pelanggan:index'],
        ['/tagihan', 'tagihan:index'],
        ['/invoice', 'invoice:index'],

        ['/error', 'ErrorRedirect:init'],
    ];
}

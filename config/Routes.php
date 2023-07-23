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
                ['/penggunaan_input', 'penggunaan:inputPenggunaan'],
                ['/pelanggan', 'pelanggan:index'],
                ['/pelanggan_input', 'pelanggan:input'],
                ['/tagihan', 'tagihan:index'],
                ['/bayar_tagihan', 'tagihan:bayar'],
                ['/invoice', 'invoice:index'],
                ['/get_data_pelanggan', 'Pelanggan:ajax'],

                ['/error', 'ErrorRedirect:init'],
        ];
}

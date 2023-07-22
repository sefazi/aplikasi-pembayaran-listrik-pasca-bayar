<?php

namespace Routes;

class Home extends Views
{

    public function index()
    {
        $login = getSession('is-login');

        // Check session
        if ($login) {
            $data = [
                'title' => 'Menu Pelanggan - Pembayaran Listrik Pascabayar',
                'render' => 'home',
                'nama_user' => 'Rismawati'
            ];
            $this->view('home/index', $data);
        } else {
            redirecting('/login');
        }
    }

    public function param()
    {
    }
}

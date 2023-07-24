<?php

namespace Routes;

class Invoice extends Views
{

    public function index()
    {
        // cek login
        $login = getSession('is-login');
        if (!$login) {
            redirecting('/login');
            die;
        }

        // cek otoritas
        $level = getSession('id_level');
        if ($level > 1) {
            redirecting('/home');
            die;
        }

        $content = [
            'render' => 'invoice'
        ];
        return $this->view('invoice/index', $content);
    }
}

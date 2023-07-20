<?php

namespace Routes;

class Login extends Views
{

    public function index()
    {
        $data = [
            'title' => 'Pembayaran Listrik Pascabayar'
        ];
        $this->view('login/index', $data);
    }

    public function auth()
    {
        var_dump($_POST);
    }
}

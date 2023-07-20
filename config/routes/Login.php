<?php

namespace Routes;

use Connection\Auth;

class Login extends Views
{
    public $database;

    public function __construct()
    {
        load(CONNPATH . 'Auth.php');
        $this->database = new Auth;
    }
    public function index()
    {
        $data = [
            'title' => 'Pembayaran Listrik Pascabayar',
            'datauser' => $this->database->GetIDPelanggan()
        ];
        $this->view('login/index', $data);
    }

    public function auth()
    {
        var_dump($_POST);
    }
}

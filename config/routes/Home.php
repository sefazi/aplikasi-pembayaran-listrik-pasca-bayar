<?php

namespace Routes;

use Connection\SessionUser;

class Home extends Views
{
    public $database;

    public function __construct()
    {
        load(CONNPATH . 'SessionUser' . PHPEXT);
        $this->database = new SessionUser;
    }

    public function index()
    {
        $login = getSession('is-login');

        // Check session
        if ($login) {
            $user = $this->database->GetUser(getSession('username'));
            $alamat = $this->database->getAlamat($user->username);
            $data = [
                'title' => 'Menu Pelanggan - Pembayaran Listrik Pascabayar',
                'render' => 'profile',
                'nama_user' => getSession('username'),
                'user' => $user,
                'alamat' => $alamat,
            ];
            $this->view('profile/index', $data);
        } else {
            redirecting('/login');
        }
    }

    public function param()
    {
    }
}

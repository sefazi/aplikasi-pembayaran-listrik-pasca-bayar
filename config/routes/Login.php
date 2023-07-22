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
        $login = getSession('is-login');
        if ($login) {
            redirecting('/home');
        } else {
            $data = [
                'title' => 'Pembayaran Listrik Pascabayar',
            ];
            $this->view('login/index', $data);
        }
    }

    public function logout()
    {
        // Check if login
        $login = getSession('is-login');
        if ($login) {
            $data = [
                'username',
                'id_user',
                'nama-admin',
                'id_level',
                'is-login'
            ];
            removeSession($data);
        }

        redirecting('/login');
    }

    public function auth()
    {
        $req = getPost();

        if (isset($req->daftar)) {
            $res = $this->database->GetID($req->username);

            if ($res != null) {
                withInput($req);
                setFlash('registered', 'User sudah terdaftar');
                setFlashError('user-has');
                redirecting('/sign-in');
            }

            $res = $this->database->InsertUser($req);
            if ($res > 0) {
                redirecting('/home');
            }
        } else {
            $res = $this->database->GetID($req->username);

            if ($res != null) {
                if (isset($req->password) && $req->password == $res->password) {
                    $data = [
                        'username' => $res->username,
                        'id_user' => $res->id_user,
                        'nama-admin' => $res->nama_admin,
                        'id_level' => $res->id_level,
                        'is-login' => true
                    ];
                    setSession($data);
                    redirecting('/home');
                } else {
                    withInput($req);
                    setFlash('wrong-pass', 'Password yang anda masukan salah');
                    setFlashError('pass-has');
                    redirecting('/login');
                }
            } else {
                withInput($req);
                setFlash('no-user', 'User tidak ditemukan');
                setFlashError('user-has');
                redirecting('/login');
            }
        }
    }

    public function signIn()
    {
        $data = [
            'title' => 'Daftar Akun',
        ];
        $this->view('login/daftar', $data);
    }
}

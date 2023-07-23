<?php

namespace Routes;

use connection\Tagihan as T;

class Tagihan extends Views
{
    public $database;

    public function __construct()
    {
        load(CONNPATH . 'Tagihan' . PHPEXT);
        $this->database = new T;
    }

    public function index()
    {
        $req = getPost();
        if ($req != null) {
            $res = $this->database->GetTagihanById($req->id_pelanggan);

            $content = [
                'render' => 'tagihan',
                'datatable' => $res
            ];
            return $this->view('tagihan/index', $content);
        } else {
            $content = [
                'render' => 'tagihan',
            ];
            return $this->view('tagihan/index', $content);
        }
    }

    public function bayar()
    {
        $req = getPost();
        $res = $this->database->UpdateStatus($req);
        if ($res > 0) {
            redirecting('/tagihan');
        }
    }
}

<?php

namespace Routes;

use Connection\Pembayaran as P;
class Pembayaran extends Views
{
    public $db;

    public function __construct() {
        load(CONNPATH . 'Pembayaran' . PHPEXT);
        $this->db = new P;
    }

    public function index()
    {
        if ($_POST != null) {
            $data = getPost();
            $this->db->InsertTarif($data);
        }else{
            $content=[
                'render' => 'pembayaran'
            ];
            return $this->view('pembayaran/index',$content);
        }
    }
}

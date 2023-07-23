<?php

namespace Routes;

use Connection\Tarif as P;

class Tarif extends Views
{
    public $db;

    public function __construct()
    {
        load(CONNPATH . 'Tarif' . PHPEXT);
        $this->db = new P;
    }

    public function index()
    {
        if ($_POST != null) {
            $req = getPost();

            $res = $this->db->GetDaya($req->daya);
            if ($res != null) {
                setFlash('exist', 'Daya Sudah Terdaftar');
                setFlashError('daya-has');
                redirecting('/tarif');
            } else {
                $res = $this->db->InsertTarif($req);
                if ($res > 0) {
                    redirecting('/tarif');
                }
            }
        } else {
            $content = [
                'render' => 'tarif'
            ];
            return $this->view('tarif/index', $content);
        }
    }
}

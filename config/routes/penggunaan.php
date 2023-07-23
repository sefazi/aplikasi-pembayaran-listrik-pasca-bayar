<?php

namespace Routes;

use Connection\Penggunaan as Peng;

class Penggunaan extends Views
{
    public $database;

    public function __construct()
    {
        load(CONNPATH . 'Penggunaan' . PHPEXT);
        $this->database = new Peng;
    }


    public function index()
    {
        $content = [
            'render' => 'penggunaan',
            'datatable' => $this->database->getDataPenggunaAll()
        ];
        return $this->view('penggunaan/index', $content);
    }

    public function inputPenggunaan()
    {
        $req = getPost();
        $data = [
            'id_penggunaan' => "PG" . date('dmHsi'),
            'id_pelanggan' => $req->id_pelanggan,
            'bulan' => $req->bulan_penggunaan_val,
            'tahun' => $req->tahun_penggunaan_val,
            'meter_awal' => $req->meterAwal,
            'meter_akhir' => $req->meter_akhir,
        ];
        $res =  $this->database->inputPenggunaan($data);
        if ($res > 0) {
            redirecting('/penggunaan');
        }
    }
}

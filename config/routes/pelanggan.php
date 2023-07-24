<?php

namespace Routes;

use Connection\Pelanggan as Pel;

class Pelanggan extends Views
{
    public $database;

    public function __construct()
    {
        load(CONNPATH . 'Pelanggan' . PHPEXT);
        $this->database = new Pel;
    }

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

        $datatable = $this->database->GetPelangganAll();

        foreach ($datatable as $key => $value) {
            if ($value->id_tarif == null || $value->id_tarif == "") {
                $value->id_tarif = "0";
            } else {
                $value->id_tarif = $this->database->GetDayaPelanggan($value->id_tarif)->daya;
            }
        }
        $content = [
            'render' => 'pelanggan',
            'datadaya' => $this->database->GetDaya(),
            'datatable' => $datatable
        ];
        return $this->view('pelanggan/index', $content);
    }

    public function input()
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

        $req = getPost();
        $res = $this->database->InputDataPelanggan($req);
        if ($res > 0) {
            redirecting('/pelanggan');
        }
    }

    public function ajax()
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

        header("Content-Type: application/json");

        $req = getPost();
        // var_dump($req->nopelanggan);
        $res = $this->database->GetPelangganByNoPelanggan($req->nopelanggan);
        $value = array(
            'nomorMeter' => $res->nomor_kwh,
            'namaPelanggan' => $res->nama_pelanggan,
            'alamat' => $res->alamat,
            'daya' => $res->id_tarif,
        );
        echo json_encode($value);
        // echo json_encode($_POST);
    }
}

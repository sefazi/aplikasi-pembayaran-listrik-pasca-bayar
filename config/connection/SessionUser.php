<?php

namespace Connection;

use Exception;
use Connection\Connection;

class SessionUser extends Connection
{
    public $db;

    public function __construct()
    {
        $this->db = new Connection;
        $err = $this->db->connect();
        if ($err != null) {
            return $err;
        }
    }

    public function GetUser($username)
    {
        $data = [$username];
        return $this->db->Raw("SELECT * FROM aplikasi_pembayaran_listrik_pascabayar.user INNER JOIN aplikasi_pembayaran_listrik_pascabayar.level WHERE user.username = ? AND user.id_level = level.id_level", $data)->First();
    }

    public function getAlamat($username)
    {
        $data = [$username];
        return $this->db->Raw("SELECT alamat FROM aplikasi_pembayaran_listrik_pascabayar.pelanggan INNER JOIN aplikasi_pembayaran_listrik_pascabayar.user WHERE pelanggan.username = ? AND pelanggan.username = user.username", $data)->First();
    }

    public function UpdateUser($data)
    {
    }
}

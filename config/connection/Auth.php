<?php

namespace Connection;

use Exception;
use Connection\Connection;

class Auth extends Connection
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

    public function GetID($username)
    {
        $data = [$username];
        return $this->db->Raw("SELECT * FROM user WHERE username = ?", $data)->First();
    }

    public function GetLatestIDUser()
    {
        $data = $this->db->Raw("SELECT max(id_user) FROM user")->First();
        $code = implode(get_object_vars($data));
        $prefix = "P";
        $length = strlen($code) - 2;
        $parse = substr($code, 2, $length);
        $num = (int)$parse + 1;

        if (strlen($num) == 1) {
            $new_id = $prefix . "000" . $num;
        } elseif (strlen($num) == 2) {
            $new_id = $prefix . "00" . $num;
        } elseif (strlen($num) == 3) {
            $new_id = $prefix . "0" . $num;
        } elseif (strlen($num) == 4) {
            $new_id = $prefix . $num;
        }
        return $new_id;
    }

    public function InsertUser($data)
    {
        $value = [
            'id_pelanggan' => date('YHmids'),
            'username' => $data->username,
            'password' => $data->password,
            'nomor_kwh' => '0',
            'nama_pelanggan' => $data->name,
            'alamat' => $data->alamat,
            'id_tarif' => ''
        ];
        $this->db->Insert('pelanggan', $value)->Exec()->rowCount();

        $value = [
            'id_user' => $this->GetLatestIDUser(),
            'username' => $data->username,
            'password' => $data->password,
            'nama_admin' => $data->name,
            'id_level' => '2'
        ];
        return $this->db->Insert('user', $value)->Exec()->rowCount();
    }
}

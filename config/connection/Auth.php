<?php

namespace Connection;

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

    public function GetIDPelanggan($username)
    {
        $data = [$username];
        return $this->db->Raw("SELECT * FROM user WHERE username = ?", $data)->First();
    }

    public function FunctionName()
    {
    }
}

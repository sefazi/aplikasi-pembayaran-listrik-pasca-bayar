<?php

namespace Connection;

use Connection\Connection;

class Auth extends Connection
{
    public $db;

    public function __construct()
    {
        $this->db = new Connection;
        $this->db->connect();
    }

    public function GetIDPelanggan()
    {
        $this->db->Raw('SELECT * FROM user');
        return $this->db->resultSet();
    }
}

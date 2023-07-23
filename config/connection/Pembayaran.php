<?php

namespace Connection;

use Exception;
use Connection\Connection;

class Pembayaran extends Connection
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
}
<?php

namespace Connection;

use Exception;
use Connection\Connection;

class Tarif extends Connection
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

    public function GetDaya($val)
    {
        $data = [$val];
        return $this->db->Raw("SELECT * FROM tarif WHERE daya = ?", $data)->First();
    }

    public function GetDayaAll()
    {
        return $this->db->Raw("SELECT * FROM tarif")->getRessult();
    }

    public function InsertTarif($data)
    {
        $value = [
            'daya' => $data->daya,
            'tarifperkwh' => $data->tarif
        ];
        return $this->db->Insert('tarif', $value)->Exec()->rowCount();
    }

    public function Edittarif($data)
    {
        $value = [
            $data->daya,
            $data->tarif,
            (int)$data->id,
        ];
        return $this->db->Raw('UPDATE tarif SET daya = ? , tarifperkwh = ? WHERE id_tarif = ? ', $value)->Exec()->rowCount();
    }
}

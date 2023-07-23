<?php

namespace Connection;

use Exception;
use Connection\Connection;

class Pelanggan extends Connection
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

    public function GetDaya()
    {
        return $this->db->Raw("SELECT * FROM tarif")->getRessult();
    }

    public function GetDayaPelanggan()
    {
        return $this->db->Raw("SELECT daya FROM tarif INNER JOIN pelanggan WHERE tarif.id_tarif = pelanggan.id_tarif")->First();
    }

    public function GetPelangganAll()
    {
        return $this->db->Raw("SELECT * FROM pelanggan")->getRessult();
    }

    public function GetPelangganByNoPelanggan($id)
    {
        return $this->db->Raw("SELECT * FROM pelanggan WHERE id_pelanggan = ?", [$id])->First();
    }

    public function InputDataPelanggan($data)
    {
        $value = [
            $data->no_meter,
            $data->alamat,
            $data->daya,
            $data->id_pelanggan,
        ];
        return $this->db->Raw("UPDATE pelanggan SET  nomor_kwh = ?, alamat = ?, id_tarif = ? WHERE id_pelanggan = ?", $value)->Exec()->rowCount();
    }
}

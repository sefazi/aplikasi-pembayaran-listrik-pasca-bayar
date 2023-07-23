<?php

namespace Connection;

use Exception;
use Connection\Connection;

class Tagihan extends Connection
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

    public function GetTagihanById($id)
    {
        return $this->db->Raw('
        SELECT 
            ta.id_tagihan,
            ta.id_penggunaan,
            ta.id_pelanggan,
            ta.bulan,
            ta.tahun,
            ta.jumlah_meter,
            ta.status,
            pel.nama_pelanggan,
            tarif.id_tarif,
            tarif.tarifperkwh,
            p.meter_awal,
            p.meter_akhir
        FROM 
            tagihan ta
        INNER JOIN 
            pelanggan pel
        INNER JOIN 
            tarif
        INNER JOIN 
            penggunaan p
        WHERE
            ta.id_pelanggan = ?
        AND 
            pel.id_pelanggan = ta.id_pelanggan
        AND 
            tarif.id_tarif = pel.id_tarif
        and 
            p.id_penggunaan = ta.id_penggunaan
        ORDER BY 
            ta.id_tagihan
        DESC
        ', [$id])->getRessult();
    }

    public function UpdateStatus($data)
    {
        $value = [
            $data->id_pel,
            $data->id_tag,
        ];
        return $this->db->Raw('UPDATE tagihan SET status = \'Lunas\' WHERE id_pelanggan = ? AND id_tagihan = ?', $value)->Exec()->rowCount();
    }
}

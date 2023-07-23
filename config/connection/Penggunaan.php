<?php

namespace Connection;

use Exception;
use Connection\Connection;

class Penggunaan extends Connection
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

    public function getDataPenggunaAll()
    {
        return $this->db->Raw("SELECT * FROM penggunaan")->getRessult();
    }

    public function InputPenggunaan($data)
    {
        $value = [
            $data['meter_akhir'],
            $data['id_pelanggan'],
        ];
        $this->db->Raw('UPDATE pelanggan SET nomor_kwh = ? WHERE id_pelanggan = ? ', $value)->Exec();

        $tagihan = [
            // 'id_tagihan' => "TG" . date('dmHsi'),
            'id_penggunaan' => $data['id_penggunaan'],
            'id_pelanggan' => $data['id_pelanggan'],
            'bulan' => $data['bulan'],
            'tahun' => $data['tahun'],
            'jumlah_meter' => $data['meter_akhir'],
            'status' => 'Belum dibayar',
        ];
        $this->db->Insert('tagihan', $tagihan)->Exec();
        return $this->db->Insert('penggunaan', $data)->Exec()->rowCount();
    }
}

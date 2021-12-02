<?php

namespace App\Controllers;

use App\Models\PendaftarModel;

class Lokasi extends BaseController
{


    public function index($id)
    {

        //ambil data json dari file
        $content = file_get_contents(base_url() . "/assets/wilayah/index.json");

        //mengubah standar encoding
        $content = utf8_encode($content);

        //mengubah data json menjadi data array asosiatif
        $result = json_decode($content, true);
        $dftr = new PendaftarModel();
        $siswa = $dftr->find($id);

        //looping data menggunakan foreach
        if ($siswa['provinsi'] == "" or $siswa['provinsi'] == NULL) {
            echo "<option value='' selected>Pilih Provinsi</option>";
        } else {
            echo "<option value='$siswa[provinsi]' selected>$siswa[provinsi]</option>";
        }
        foreach ($result as $value) {
            echo "
        <option value='$value[code]:$value[name]'>$value[name]</option>
        ";
        }
    }

    public function store()
    {
        $data = [
            'nama_lokasi' => $this->request->getVar('nama_lokasi'),
            'keterangan' => $this->request->getVar('keterangan')
        ];
        $this->db->table('lokasi')->insert($data);
    }
}

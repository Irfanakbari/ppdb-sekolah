<?php

namespace App\Controllers;

class Blast extends BaseController
{
    protected $pendaftarModel;
    protected $jurusanModel;
    protected $settingModel;
    protected $kontakModel;
    protected $deviceModel;
    public function __construct()
    {
        $this->pendaftarModel = new \App\Models\PendaftarModel();
        $this->jurusanModel = new \App\Models\JurusanModel();
        $this->settingModel = new \App\Models\SettingModel();
        $this->kontakModel = new \App\Models\KontakModel();
        $this->deviceModel = new \App\Models\DeviceModel();
    }
    public function blaster()
    {
        if ($this->request->getVar('status') == 1 || $this->request->getVar('status') == 0) {
            $status = $this->pendaftarModel->table('daftar')->where('status', (int)$this->request->getVar('status'))->get()->getResultArray();
        } else {
            $status = $this->pendaftarModel->get()->getResultArray();
        }
        $status = $this->pendaftarModel->where('status', (int)$this->request->getVar('status'))->get()->getResultArray();
        $device = $this->deviceModel->where('id_device', (int) $this->request->getVar('device'))->get()->getResultArray();
        $pesan = $this->request->getVar('pesan');
        $sekolah = $this->settingModel->find(1);
        $siswa = $this->pendaftarModel->findAll();
        $token = $device['device_id'];

        // Looping send wa foreach siswa
        foreach ($status as $siswa) {
            $pesan = str_replace('{{nama}}', $siswa['nama_lengkap'], $pesan);
            $pesan = str_replace('{{nik}}', $siswa['nik'], $pesan);
            $pesan = str_replace('{{no_pendaftaran}}', $siswa['no_daftar'], $pesan);
            $pesan = str_replace('{{asal_sekolah}}', $siswa['asal_sekolah'], $pesan);
            $pesan = str_replace('{{nama_sekolah}}', $sekolah['nama_sekolah'], $pesan);
            $pesan = str_replace('{{alamat_sekolah}}', $sekolah['alamat'], $pesan);


            // WA Gateway API
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://hp.fonnte.com/api/send_message.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'phone' => $siswa['no_hp'],
                    'type' => 'text',
                    'text' => $pesan,
                    'delay' => '5',
                    'schedule' => '0'
                ),
                CURLOPT_HTTPHEADER => array(
                    "Authorization: $token"
                ),
            ));

            $response = curl_exec($curl);


            curl_close($curl);
            echo $response;
            sleep(1); #do not delete!
            // End Wa Gateway API

            session()->setFlashdata('sukses', 'Pesan berhasil dikirim');
        }
        return redirect()->to('/admin/wa/pesan');
    }
}

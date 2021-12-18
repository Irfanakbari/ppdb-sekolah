<?php

namespace App\Controllers;

class Crud extends BaseController
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
    public function view()
    {

        $pendaftar = $this->pendaftarModel->findAll();
        dd($pendaftar);
        return view('welcome_message');
    }
    public function save()
    {
        // validate input
        if ($this->pendaftarModel->where('nik', $this->request->getVar('nik'))->countAllResults() > 0) {
            session()->setFlashdata('warning', 'NIK sudah terdaftar');
            $respon = [
                'status' => "failed",
                'message' => 'NIK sudah terdaftar'
            ];
        } else {
            $id = $this->request->getPost('nik');
            $this->pendaftarModel->insert(
                [
                    'no_daftar' => 'PPDB2021',
                    'nik' => $this->request->getVar('nik'),
                    'nama_lengkap' => ucwords($this->request->getVar('nama_lengkap')),
                    'asal_sekolah' => strtoupper($this->request->getVar('asal_sekolah')),
                    'jenkel' => $this->request->getVar('jenkel'),
                    'jurusan' => $this->request->getVar('jurusan'),
                    'no_hp' => $this->request->getVar('no_hp'),
                    'tempat_lahir' => ucwords($this->request->getVar('tempat_lahir')),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir')
                ]

            );
            // $nyariid = $this->pendaftarModel->find($id);
            // $curl = curl_init();

            // curl_setopt_array($curl, array(
            //     CURLOPT_URL => "https://hp.fonnte.com/api/send_message.php",
            //     CURLOPT_RETURNTRANSFER => true,
            //     CURLOPT_ENCODING => "",
            //     CURLOPT_MAXREDIRS => 10,
            //     CURLOPT_TIMEOUT => 0,
            //     CURLOPT_FOLLOWLOCATION => true,
            //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //     CURLOPT_CUSTOMREQUEST => "POST",
            //     CURLOPT_POSTFIELDS => array(
            //         'phone' => $this->request->getVar('no_hp'),
            //         'type' => 'text',
            //         'text' => 'Halo ' . $this->request->getVar('nama_lengkap') . ' Selamat Anda Telah Terdaftar di PPDB 2021 Dengan Nomor Pendaftaran : PPDB2021' . $nyariid['id'],
            //         'delay' => '1',
            //         'schedule' => '0'
            //     ),
            //     CURLOPT_HTTPHEADER => array(
            //         "Authorization: hkgSE5jKqxJ6zr3gHo7g"
            //     ),
            // ));

            // $response = curl_exec($curl);


            // curl_close($curl);
            // echo $response;
            // sleep(1); #do not delete!
            $respon = [
                'status' => "success",
                'message' => 'Pendaftaran Berhasil'
            ];
        }

        return $this->response->setJSON($respon);
    }
    public function updatejurusan()
    {
        $this->jurusanModel->update($this->request->getVar('id_old'), [
            'id_jurusan' => $this->request->getVar('id_jurusan'),
            'nama_jurusan' => $this->request->getVar('nama_jurusan'),
            'kuota' => $this->request->getVar('kuota'),
            'status' => $this->request->getVar('status')
        ]);


        session()->setFlashdata('update', 'Jurusan Berhasil Diubah');
        return redirect()->to('/admin/jurusan/jurusan');
    }
    public function addjurusan()
    {
        $this->jurusanModel->insert([
            'id_jurusan' => $this->request->getVar('id_jurusan'),
            'nama_jurusan' => $this->request->getVar('nama_jurusan'),
            'kuota' => $this->request->getVar('kuota'),
            'status' => $this->request->getVar('status')
        ]);


        session()->setFlashdata('update', 'Jurusan Berhasil Ditambah');
        return redirect()->to('/admin/jurusan/jurusan');
    }
    public function deletejurusan($id)
    {
        $this->jurusanModel->delete($id);


        session()->setFlashdata('delete', 'Jurusan Berhasil Dihapus');
        return redirect()->to('admin/jurusan/jurusan');
    }
    public function updatesyarat()
    {
        try {
            $this->settingModel->update(1, [
                'syarat' => $this->request->getVar('syarat')
            ]);
            session()->setFlashdata('sukses', 'Syarat Berhasil Diubah');
        } catch (\Throwable $th) {
            session()->setFlashdata('failed', 'Syarat Gagal Diubah');
        }
        return redirect()->to('admin/syarat');
    }
    public function addkontak()
    {
        $data['sekolah'] =  $this->settingModel->find(1);
        $data['kontak'] = $this->kontakModel->insert(
            [
                'nama_kontak' => $this->request->getVar('nama_kontak'),
                'no_kontak' => $this->request->getVar('no_kontak'),
            ]

        );
        session()->setFlashdata('sukses', 'Kontak Berhasil Ditambahkan');
        return redirect()->to('admin/kontak/kontak');
    }
    public function updatekontak($i)
    {
        $data['sekolah'] =  $this->settingModel->find(1);
        $data['kontak'] = $this->kontakModel->update(
            $i,
            [
                'nama_kontak' => $this->request->getVar('nama_kontak'),
                'no_kontak' => $this->request->getVar('no_kontak'),
            ]

        );
        session()->setFlashdata('sukses', 'Kontak Berhasil Diubah');
        return redirect()->to('admin/kontak/kontak');
    }
    public function updatependaftar($id)
    {
        $data = [
            'nama_lengkap' => ucwords($this->request->getVar('nama')),
            'asal_sekolah' => strtoupper($this->request->getVar('asal')),
            'jurusan' => $this->request->getVar('jurusan'),
            'tempat_lahir' => ucwords($this->request->getVar('tempat')),
            'tgl_lahir' => $this->request->getVar('tgllahir'),
            'baju' => $this->request->getVar('baju'),
            'nisn' => $this->request->getVar('nisn'),
            'no_kk' => $this->request->getVar('nokk'),
            'jenkel' => $this->request->getVar('jenkel'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('nohp'),
            'anak_ke' => $this->request->getVar('anakke'),
            'saudara' => $this->request->getVar('saudara'),
            'tinggi' => $this->request->getVar('tinggi'),
            'berat' => $this->request->getVar('berat'),
            'status_keluarga' => $this->request->getVar('statuskeluarga'),
            'no_kip' => $this->request->getVar('kip'),
            'alamat' => ucwords($this->request->getVar('alamat')),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'provinsi' => ucwords($this->request->getVar('provinsi')),
            'kabupaten' => ucwords($this->request->getVar('kota')),
            'kecamatan' => ucwords($this->request->getVar('kecamatan')),
            'desa' => ucwords($this->request->getVar('desa')),
            'kode_pos' => $this->request->getVar('kodepos'),
            'tinggal' => $this->request->getVar('tinggal'),
            'jarak' => $this->request->getVar('jarak'),
            'nama_ayah' => ucwords($this->request->getVar('namaayah')),
            'nama_ibu' => ucwords($this->request->getVar('namaibu')),
            'nik_ayah' => $this->request->getVar('nikayah'),
            'nik_ibu' => $this->request->getVar('nikibu'),
            'tempat_ayah' => ucwords($this->request->getVar('tempatayah')),
            'tempat_ibu' => ucwords($this->request->getVar('tempatibu')),
            'tgl_lahir_ayah' => $this->request->getVar('tglayah'),
            'tgl_lahir_ibu' => $this->request->getVar('tglibu'),
            'pendidikan_ayah' => $this->request->getVar('pendidikan_ayah'),
            'pendidikan_ibu' => $this->request->getVar('pendidikan_ibu'),
            'no_hp_ayah' => $this->request->getVar('nohpayah'),
            'no_hp_ibu' => $this->request->getVar('nohpibu'),
            'nama_wali' => ucwords($this->request->getVar('namawali')),
            'nik_wali' => $this->request->getVar('nikwali'),
            'tempat_wali' => ucwords($this->request->getVar('tempatwali')),
            'tgl_lahir_wali' => $this->request->getVar('tgllahirwali'),
            'pendidikan_wali' => $this->request->getVar('pendidikanwali'),
            'no_hp_wali' => $this->request->getVar('nohpwali'),
            'status' => $this->request->getVar('status'),
        ];
        try {
            $this->pendaftarModel->update(
                $id,
                $data

            );
            session()->setFlashdata('sukses', 'Pendaftar Berhasil Diubah');
        } catch (\Throwable $th) {
            session()->setFlashdata('failed', $th->getMessage());
        }
        return redirect()->to('admin/pendaftar/pendaftar');
    }
    public function waadd()
    {
        try {
            $this->deviceModel->insert(
                [
                    'nama_device' => $this->request->getVar('nama_device'),
                    'device_id' => $this->request->getVar('device_id'),
                    'status' => $this->request->getVar('status'),
                    'no_utama' => $this->request->getVar('no_utama'),
                    'no_hp' => $this->request->getVar('no_hp'),
                ]
            );
            session()->setFlashdata('sukses', 'Data Berhasil Ditambah');
            return redirect()->to('admin/wa/device');
        } catch (\Throwable $th) {
            session()->setFlashdata('failed', $th);
            return redirect()->to('admin/wa/device');
        }
    }
    public function waupdate($id)
    {
        try {
            $this->deviceModel->update(
                $id,
                [
                    'nama_device' => $this->request->getVar('nama_device'),
                    'device_id' => $this->request->getVar('device_id'),
                    'status' => $this->request->getVar('status'),
                    'no_utama' => $this->request->getVar('no_utama'),
                    'no_hp' => $this->request->getVar('no_hp'),
                ]
            );
            session()->setFlashdata('sukses', 'Data Berhasil Diubah');
            return redirect()->to('admin/wa/device');
        } catch (\Throwable $th) {
            session()->setFlashdata('failed', $th);
            return redirect()->to('admin/wa/device');
        }
    }
}

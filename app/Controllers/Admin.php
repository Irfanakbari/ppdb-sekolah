<?php

namespace App\Controllers;

use App\Models\JurusanModel;
use App\Models\PendaftarModel;
use App\Models\PengumumanModel;
use App\Models\SettingModel;
use App\Models\KontakModel;
use App\Models\DeviceModel;

class Admin extends BaseController
{
    protected $SettingModel;
    protected $PendaftarModel;
    protected $JurusanModel;
    protected $PengumumanModel;
    protected $kontakModel;
    protected $deviceModel;
    public function __construct()
    {

        $this->SettingModel = new SettingModel();
        $this->PendaftarModel = new PendaftarModel();
        $this->JurusanModel = new JurusanModel();
        $this->PengumumanModel = new PengumumanModel();
        $this->kontakModel = new KontakModel();
        $this->deviceModel = new DeviceModel();
    }
    public function index()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['kuota'] = $this->JurusanModel->findAll();
        $data['pendaftar'] = $this->PendaftarModel->countAll();
        $data['diterima'] = $this->PendaftarModel->where('status', 1)->countAllResults();
        $data['pending'] = $this->PendaftarModel->where('status', 0)->countAllResults();
        $data['pria'] = $this->PendaftarModel->where('jenkel', 'L')->countAllResults();
        $data['wanita'] = $this->PendaftarModel->where('jenkel', 'P')->countAllResults();
        $data['title'] = 'Dashboard';
        $builder = $this->PendaftarModel->distinct(true)->select('asal_sekolah')->get()->getResultArray();
        $data['sekol'] = array();
        $data['jumlah'] = array();
        foreach ($builder as $sekola) {
            array_push($data['sekol'], $sekola['asal_sekolah']);
            array_push($data['jumlah'], $this->PendaftarModel->where('asal_sekolah', $sekola['asal_sekolah'])->countAllResults());
        }
        return view('admin/index', $data);
    }
    public function pendaftar()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['pendaftar'] = $this->PendaftarModel->findAll();
        return view('admin/pendaftar/pendaftar', $data);
    }
    public function editpendaftar($id)
    {

        try {
            $data['sekolah'] =  $this->SettingModel->find(1);
            $data['siswa'] = $this->PendaftarModel->find($id);
            $data['jurusan'] = $this->JurusanModel->findAll();
            return view('admin/pendaftar/detail', $data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function pendaftarditerima()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['siswa'] = $this->PendaftarModel->where('status', 1)->get()->getResultArray();
        $data['jurusan'] = $this->JurusanModel->findAll();
        return view('admin/pendaftar/pendaftar_diterima', $data);
    }
    public function pendaftarditolak()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['siswa'] = $this->PendaftarModel->where('status', 0)->get()->getResultArray();
        $data['jurusan'] = $this->JurusanModel->findAll();
        return view('admin/pendaftar/pendaftar_pending', $data);
    }
    public function hapuspendaftar($id)
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $this->PendaftarModel->delete($id);
        session()->setFlashdata('hapus', 'Pendaftar Berhasil Dihapus');
        return redirect()->to('admin/pendaftar/pendaftar');
    }
    public function jurusan()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['jurusan'] = $this->JurusanModel->findAll();
        return view('admin/jurusan/jurusan', $data);
    }
    public function editjurusan($id)
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['jurusan'] = $this->JurusanModel->find($id);
        return view('admin/jurusan/edit', $data);
    }
    public function tambahjurusan()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        return view('admin/jurusan/tambah', $data);
    }
    public function pengumuman()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['pengumuman'] = $this->PengumumanModel->findAll();
        $data['title'] = 'Dashboard';

        return view('admin/pengumuman/pengumuman', $data);
    }
    public function viewpengumuman()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['pengumuman'] = $this->PengumumanModel->findAll();
        $data['title'] = 'Dashboard';
        return $data['pengumuman'];
    }

    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function user()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, full_name,avatar_pict, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();
        $data['users'] = $query->getResult();
        $data['title'] = 'User Management';
        return view('admin/users/user', $data);
    }

    public function pengumumantambah()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $this->PengumumanModel->insert(
            [
                'judul' => $this->request->getVar('judul'),
                'pengumuman' => $this->request->getVar('pengumuman'),
                'created_by' => $this->request->getVar('created_by'),
            ]

        );

        session()->setFlashdata('pengumuman', 'Data Berhasil Ditambah');
    }
    public function updatepengumuman($id)
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $this->PengumumanModel->update(
            $id,
            [
                'judul' => $this->request->getVar('judul'),
                'pengumuman' => $this->request->getVar('pengumuman'),
            ]

        );

        session()->setFlashdata('pengumuman', 'Data Berhasil Diubah');
        return redirect()->to('admin/pengumuman/pengumuman');
    }
    public function hapuspengumuman($id)
    {
        $data['sekolah'] =  $this->SettingModel->find(1);

        $this->PengumumanModel->delete($id);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('admin/pengumuman/pengumuman');
    }
    public function syarat()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['syaratD'] = $this->SettingModel->find(1);
        return view('admin/web/syarat', $data);
    }
    public function kontak()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['kontak'] = $this->kontakModel->findAll();

        return view('admin/kontak/kontak', $data);
    }

    public function hapuskontak($id)
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['kontak'] = $this->kontakModel->delete(
            $id
        );
        session()->setFlashdata('sukses', 'Kontak Berhasil Dihapus');
        return redirect()->to('admin/kontak/kontak');
    }
    public function wadevice()
    {
        $data['device'] = $this->deviceModel->findAll();
        $data['sekolah'] =  $this->SettingModel->find(1);

        return view('admin/wa/device', $data);
    }
    public function wadevicehapus($id)
    {
        $data['device'] = $this->deviceModel->delete(
            $id
        );
        session()->setFlashdata('sukses', 'Device Berhasil Dihapus');
        return redirect()->to('admin/wa/device');
    }
    public function wapesan()
    {
        $data['sekolah'] =  $this->SettingModel->find(1);
        $data['device'] = $this->deviceModel->where('status', '1')->get()->getResultArray();

        return view('admin/wa/send_wa', $data);
    }
    public function setting()
    {
        $data['setting'] =  $this->SettingModel->find(1);
        $data['sekolah'] =  $this->SettingModel->find(1);
        return view('admin/setting/setting', $data);
    }
    public function settingupdate()
    {
        $fileLogo = $this->request->getFile('logo');
        $fileLogo->move('img', $fileLogo->getName(), true);
        $data = [
            'nama_sekolah' => $this->request->getVar('nama'),
            'npsn' => $this->request->getVar('npsn'),
            'alamat' => $this->request->getVar('alamat'),
            'kota' => $this->request->getVar('kota'),
            'nama_kepsek' => $this->request->getVar('nama_kepsek'),
            'nip_kepsek' => $this->request->getVar('nip_kepsek'),
            'nolivechat' => $this->request->getVar('nolivechat'),
            'livechat' => $this->request->getVar('livechat'),
            'ppdb_open' => $this->request->getVar('ppdb_open'),
            'ppdb_close' => $this->request->getVar('ppdb_close'),
            'logo' => $fileLogo->getName(),
        ];
        $this->SettingModel->update(1, $data);
        return redirect()->to('admin/setting/setting');
    }
}

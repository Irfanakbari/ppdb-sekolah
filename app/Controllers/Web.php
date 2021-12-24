<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\JurusanModel;
use App\Models\SettingModel;
use App\Models\KontakModel;
use App\Models\PengumumanModel;
use Dompdf\Dompdf;
use CodeIgniter\HTTP\Request;


class Web extends BaseController
{
    protected $pendaftarModel;
    protected $settingModel;
    protected $kontakModel;
    protected $jurusanModel;
    protected $pengumumanModel;
    public function __construct()
    {
        $this->pendaftarModel = new PendaftarModel();
        $this->settingModel = new SettingModel();
        $this->jurusanModel = new JurusanModel();
        $this->kontakModel = new KontakModel();
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $data['count'] = $this->pendaftarModel->countAll();
        $data['setting'] = $this->settingModel->find(1);
        $data['syarat'] = $this->settingModel->find(1);
        $data['kuota'] = $this->jurusanModel->findAll();
        $data['kontak'] = $this->kontakModel->findAll();

        return redirect()->to(base_url('home'));
    }
    public function homes()
    {
        $data['setting'] = $this->settingModel->find(1);
        $data['kuota'] = $this->jurusanModel->findAll();
        $data['syarat'] = $this->settingModel->find(1);
        $data['count'] = $this->pendaftarModel->countAll();
        $data['kontak'] = $this->kontakModel->findAll();
        $builder = $this->pendaftarModel->distinct(true)->select('asal_sekolah')->get()->getResultArray();
        $data['sekolah'] = array();
        $data['jumlah'] = array();
        $data['jml_jurusan'] = $this->jurusanModel->countAllResults();
        $data['jml_sekolah'] = $this->pendaftarModel->distinct(true)->select('asal_sekolah')->countAllResults();
        foreach ($builder as $sekola) {
            array_push($data['sekolah'], $sekola['asal_sekolah']);
            array_push($data['jumlah'], $this->pendaftarModel->where('asal_sekolah', $sekola['asal_sekolah'])->countAllResults());
        }
        return view('web/homes', $data);
    }
    public function home()
    {

        $data['setting'] = $this->settingModel->find(1);
        $data['kuota'] = $this->jurusanModel->findAll();
        $data['syarat'] = $this->settingModel->find(1);
        $data['count'] = $this->pendaftarModel->countAll();
        $data['kontak'] = $this->kontakModel->findAll();
        $builder = $this->pendaftarModel->distinct(true)->select('asal_sekolah')->get()->getResultArray();
        $data['sekolah'] = array();
        $data['jumlah'] = array();
        foreach ($builder as $sekola) {
            array_push($data['sekolah'], $sekola['asal_sekolah']);
            array_push($data['jumlah'], $this->pendaftarModel->where('asal_sekolah', $sekola['asal_sekolah'])->countAllResults());
        }
        return view('web/index', $data);
    }
    public function pendaftaran()
    {
        $data['setting'] = $this->settingModel->find(1);
        $data['jurusan'] = $this->jurusanModel->findAll();
        $data['count'] = $this->pendaftarModel->countAll();
        $data['pendaftaran'] = $this->settingModel->find(1);
        $data['kontak'] = $this->kontakModel->findAll();
        $data['kuota'] = 0;
        $data['ip'] = $this->request->getIPAddress();
        foreach ($this->jurusanModel->findAll() as $key) {
            $data['kuota'] = $data['kuota'] + $key['kuota'];
        }
        return view('web/pendaftaran', $data);
    }
    public function pengumuman()
    {

        $data['pengumuman'] = $this->pengumumanModel->findAll();
        $data['setting'] = $this->settingModel->find(1);

        return view('web/pengumuman', $data);
    }
    public function cetakpdf()
    {

        $data['pengumuman'] = $this->pengumumanModel->findAll();
        $data['setting'] = $this->settingModel->find(1);

        return view('web/cetakformulir', $data);
    }
    public function printpdf()
    {
        $id = $this->request->getVar('nik');
        $pendaftar = new PendaftarModel();
        $sekolah = new SettingModel();
        $data['siswa'] = $pendaftar->find($id);
        $data['setting'] = $sekolah->find(1);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf(['isRemoteEnabled' => false]);
        $dompdf->loadHtml(view('admin/pendaftar/formulir_pdf', $data));
        $dompdf->setPaper('A4', 'portrait');


        // render html as PDF
        $dompdf->render();
        $filename = 'Formulir_' . $id . '.pdf';

        // output the generated pdf
        $dompdf->stream($filename, array("Attachment" => 0));
        exit();
    }
    public function getsekolah()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('daftar')->distinct(true)->select('asal_sekolah')->get()->getResultArray();
        $data['sekolah'] = array();
        $data['jumlah'] = array();
        foreach ($builder as $sekola) {
            array_push($data['sekolah'], $sekola['asal_sekolah']);
            array_push($data['jumlah'], $db->table('daftar')->where('asal_sekolah', $sekola['asal_sekolah'])->countAllResults());
        }
    }
}

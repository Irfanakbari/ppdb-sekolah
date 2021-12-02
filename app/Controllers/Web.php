<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\JurusanModel;
use App\Models\SettingModel;
use App\Models\KontakModel;
use App\Models\PengumumanModel;
use Dompdf\Dompdf;


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
    public function home()
    {
        $data['setting'] = $this->settingModel->find(1);

        $data['kuota'] = $this->jurusanModel->findAll();
        $data['syarat'] = $this->settingModel->find(1);
        $data['count'] = $this->pendaftarModel->countAll();
        $data['kontak'] = $this->kontakModel->findAll();
        return view('web/home', $data);
    }
    public function pendaftaran()
    {
        $data['setting'] = $this->settingModel->find(1);

        $data['jurusan'] = $this->jurusanModel->findAll();
        $data['count'] = $this->pendaftarModel->countAll();
        $data['pendaftaran'] = $this->settingModel->find(1);
        $data['kontak'] = $this->kontakModel->findAll();
        $data['kuota'] = 0;
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
        // $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf(['isRemoteEnabled' => false]);
        $dompdf->loadHtml(view('admin/pendaftar/formulir_pdf', $data));
        $dompdf->setPaper('A4', 'portrait');


        // render html as PDF
        $dompdf->render();
        $filename = 'Formulir_' . $id . '.pdf';

        // output the generated pdf
        $dompdf->stream($filename);

        return redirect()->to('/');
    }
}

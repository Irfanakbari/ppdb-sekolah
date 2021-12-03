<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\PendaftarModel;
use App\Models\SettingModel;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Dompdf\Dompdf;

class Export extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function export($id)
    {
        $pendaftar = new PendaftarModel();

        if ($id == 1) {

            $db      = \Config\Database::connect();
            $builder = $db->table('daftar');
            $data = $builder->where('status', $id)->get()->getResultArray();
        } elseif ($id == 0) {

            $db      = \Config\Database::connect();
            $builder = $db->table('daftar');
            $data = $builder->where('status', $id)->get()->getResultArray();
        } else if ($id == 3) {

            $data = $pendaftar->findAll();
        }

        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'NIK')
            ->setCellValue('C1', 'NISN')
            ->setCellValue('D1', 'Nama Lengkap')
            ->setCellValue('E1', 'Asal Sekolah')
            ->setCellValue('F1', 'No Hp');

        $column = 2;
        $no = 1;
        foreach ($data as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no++)
                ->setCellValue('B' . $column, $data['nik'])
                ->setCellValue('C' . $column, $data['nisn'])
                ->setCellValue('D' . $column, $data['nama_lengkap'])
                ->setCellValue('E' . $column, $data['asal_sekolah'])
                ->setCellValue('F' . $column, $data['no_hp']);
            $column++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Pendaftar';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function formpdf($id)
    {
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
    }
}

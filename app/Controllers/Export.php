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
    protected $PendaftarModel;
    protected $settingModel;

    public function __construct()
    {
        $this->PendaftarModel = new PendaftarModel();
        $this->settingModel = new SettingModel();
    }
    public function export($id)
    {
        if ($id == 1) {
            $data = $this->PendaftarModel->where('status', $id)->get()->getResultArray();
        } elseif ($id == 0) {
            $data = $this->PendaftarModel->where('status', $id)->get()->getResultArray();
        } else if ($id == 3) {
            $data = $this->PendaftarModel->findAll();
        }

        // call spreadsheet library
        $spreadsheet = new Spreadsheet();

        // set header/title cell
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'NIK')
            ->setCellValue('C1', 'NISN')
            ->setCellValue('D1', 'Nama Lengkap')
            ->setCellValue('E1', 'Asal Sekolah')
            ->setCellValue('F1', 'No Hp');
        $column = 2;
        $no = 1;
        // looping data and insert to cell
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
        // set header 
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Pendaftar';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        // save file and download
        $writer->save('php://output');
    }

    public function formpdf($id)
    {
        $data['siswa'] = $this->PendaftarModel->find($id);
        $data['setting'] = $this->settingModel->find(1);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf(['isRemoteEnabled' => false]);
        $dompdf->loadHtml(view('admin/pendaftar/formulir_pdf', $data));
        $dompdf->setPaper('A4', 'portrait');


        try {
            // render html as PDF
            $dompdf->render();
            $filename = 'Formulir_' . $id . '.pdf';

            // output the generated pdf
            $dompdf->stream($filename);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\UniqueGenerator;

class PendaftarModel extends Model
{
    protected $table = 'daftar';
    protected $primaryKey = 'nik';
    protected $useTimestamps = true;
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'nik',
        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'no_hp',
        'asal_sekolah',
        'no_daftar',
        'jurusan',
        'baju',
        'nisn',
        'no_kk',
        'jenkel',
        'agama',
        'anak_ke',
        'saudara',
        'tinggi',
        'berat',
        'status_keluarga',
        'no_kip',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'tinggal',
        'jarak',
        'nama_ayah',
        'nama_ibu',
        'nik_ayah',
        'nik_ibu',
        'pendidikan_ayah',
        'pendidikan_ibu',
        'tempat_ayah',
        'tempat_ibu',
        'tgl_lahir_ayah',
        'tgl_lahir_ibu',
        'no_hp_ayah',
        'no_hp_ibu',
        'nama_wali',
        'nik_wali',
        'pendidikan_wali',
        'tempat_wali',
        'tgl_lahir_wali',
        'no_hp_wali',
        'status'



    ];
}

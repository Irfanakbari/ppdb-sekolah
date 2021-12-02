<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table = 'setting';
    protected $primaryKey = 'id_setting';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'syarat',
        'nama_sekolah',
        'alamat',
        'npsn',
        'kota',
        'nama_kepsek',
        'nip_kepsek',
        'nolivechat',
        'livechat',
        'ppdb_open',
        'ppdb_close',
        'logo'

    ];
}

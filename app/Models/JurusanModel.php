<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_jurusan', 'nama_jurusan', 'kuota', 'status'];
}

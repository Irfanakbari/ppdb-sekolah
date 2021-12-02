<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'kontak';
    protected $useTimestamps = false;
    protected $createdField =  false;
    protected $primaryKey = 'id_kontak';
    protected $allowedFields = ['nama_kontak', 'no_kontak', 'status'];
    // protected $allowedFields = ['judul', 'pengumuman'];
}

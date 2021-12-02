<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
    protected $table = 'device';
    protected $useTimestamps = false;
    protected $createdField =  false;
    protected $primaryKey = 'id_device';
    protected $allowedFields = ['nama_device', 'no_hp', 'status', 'no_utama', 'device_id'];
}

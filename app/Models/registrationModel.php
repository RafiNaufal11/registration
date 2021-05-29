<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table = 'registration';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'tempat', 'tanggal', 'jenkel', 'alamat'];
}

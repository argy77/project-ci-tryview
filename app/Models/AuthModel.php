<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $DBGroup = 'secondDB';
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nik', 'nama'];

    public function validateLogin($nik)
    {
        return $this->where(['nik' => $nik])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $DBGroup = 'secondDB';
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $allowedFields = ['id_pegawai'];

    public function validateLogin($id_pegawai, $password)
    {
        return $this->where(['id_pegawai' => $id_pegawai])->first();
    }
}

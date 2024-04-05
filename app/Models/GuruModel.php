<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model{

    protected $table = 'data_guru';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_guru', 'nama_guru', 'alamat', 'no_telepon','gambar'];

    public function getGuru($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['id_guru' => $slug])->first();
    }
}
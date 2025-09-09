<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa'; 
    protected $primaryKey = 'nim';  
    protected $allowedFields = ['nim', 'nama', 'umur'];

    public function getAllMahasiswa()
    {
        return $this->findAll();
    }

    public function getMahasiswaByNim($nim)
    {
        return $this->where('nim', $nim)->first();
    }
}

<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display_mahasiswa()
    {
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $model->getAllMahasiswa()
        ];
        return view('mahasiswa/display_mahasiswa', $data);
    }

    public function detail_mahasiswa($nim)
    {
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Detail Mahasiswa',
            'mhs' => $model->getMahasiswaByNim($nim)
        ];

        if (!$data['mhs']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan");
        }

        return view('mahasiswa/detail_mahasiswa', $data);
    }
}

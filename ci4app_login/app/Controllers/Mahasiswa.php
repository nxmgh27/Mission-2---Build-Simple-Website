<?php namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display_mahasiswa()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        return view('layout/template2', [
            'content' => view('mahasiswa/display_mahasiswa', $data)
        ]);
    }

    public function detail_mahasiswa($nim)
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        $model = new MahasiswaModel();
        $data['mhs'] = $model->where('nim', $nim)->first();

        return view('layout/template2', [
            'content' => view('mahasiswa/detail_mahasiswa', $data)
        ]);
    }
}

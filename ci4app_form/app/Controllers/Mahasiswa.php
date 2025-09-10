<?php namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display_mahasiswa()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        return view('layout/template2', [
            'content' => view('mahasiswa/display_mahasiswa', $data)
        ]);
    }

    public function create()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        helper('form');
        $data['validation'] = \Config\Services::validation();

        return view('layout/template2', [
            'content' => view('mahasiswa/create', $data)
        ]);
    }

    public function store()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        helper('form');
        $model = new MahasiswaModel();

        $rules = [
            'nim'  => 'required|is_unique[mahasiswa.nim]',
            'nama' => 'required',
            'umur' => 'required|integer'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $model->save([
            'nim'  => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur')
        ]);

        return redirect()->to('mahasiswa/display_mahasiswa');
    }

    public function detail_mahasiswa($nim)
    {
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

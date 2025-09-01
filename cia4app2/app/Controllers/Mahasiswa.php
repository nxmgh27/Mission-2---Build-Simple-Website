<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $data['mahasiswa'] = $model->like('nama', $keyword)
                                       ->orLike('nim', $keyword)
                                       ->orLike('kelas', $keyword)
                                       ->findAll();
        } else {
            $data['mahasiswa'] = $model->findAll();
        }

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        $model = new MahasiswaModel();
        $model->insert([
            'nim'   => $this->request->getPost('nim'),
            'nama'  => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($id);
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $model = new MahasiswaModel();
        $model->update($id, [
            'nim'   => $this->request->getPost('nim'),
            'nama'  => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function detail($id)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($id);
        return view('mahasiswa/detail', $data);
    }
}

<?php

namespace App\Controllers;

class TableLoopController extends BaseController
{
    public function index()
    {
        $data['mahasiswa'] = [
            ['nama' => 'Juan', 'kelas' => 'A'],
            ['nama' => 'Hasan', 'kelas' => 'B'],
            ['nama' => 'Nina', 'kelas' => 'C'],
        ];

        return view('table_loop_view', $data);
    }
}

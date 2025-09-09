<?php namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();

        // Ambil input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Dummy user (kamu bisa ganti dengan query DB)
        $users = [
            ['username' => 'ali', 'password' => '123'],
            ['username' => 'budi', 'password' => '123'],
            ['username' => 'juki', 'password' => '123'],
        ];

        $valid = false;
        foreach ($users as $u) {
            if ($u['username'] === $username && $u['password'] === $password) {
                $valid = true;
                break;
            }
        }

        if ($valid) {
            $session->set('isLoggedIn', true);
            $session->set('username', $username);
            return redirect()->to('/mahasiswa/display_mahasiswa');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}

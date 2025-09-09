<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        return view('layout/template2', [
            'title' => 'WEBSITE SMA XYZ',
            'content' => view('home')
        ]);
    }
}

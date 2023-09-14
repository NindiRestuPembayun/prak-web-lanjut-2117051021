<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => 'Nindi Restu Pembayun',
            'kelas' => 'C',
            'npm' => '2117051021'
        ];
        return view('profile', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
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
public function create()
{
    return view('create_user');
}
public function store()
{
    $data = [
        'nama' =>  $this->request->getVar('nama'),
        'kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
    ];
    return view('profile', $data);
}


}
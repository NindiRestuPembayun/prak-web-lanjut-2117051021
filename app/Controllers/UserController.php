<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\kelasModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

   
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
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
public function create(){
    $kelasModel = new KelasModel();

    $kelas = $this->kelasModel->getKelas();
    $data = [
        'kelas' => $kelas,
    ];
    return view('create_user', $data);

    
    session();   
    // $kelas = [
    //     [
    //         'id'=>1,
    //         'nama_kelas'=>'A'
    //     ],
    //     [
    //         'id'=>2,
    //         'nama_kelas'=>'B'
    //     ],
    //     [
    //         'id'=>3,
    //         'nama_kelas'=>'C'
    //     ],
    //     [
    //         'id'=>4,
    //         'nama_kelas'=>'D'
    //     ],

        
    // ];

    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
    ];

    $data=[
        'kelas'=>$kelas,
        'validation' => \Config\Services::validation()
    ];
    return view('create_user',$data);
}
public function store()
{
    // validasi Input
    if(!$this->validate([
        'nama' => 'required',
        'npm' => 'required|is_unique[user.npm]'  
        
    ])) {
        $validation = \Config\Services::validation();
        // dd($validation);
         return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
         
     }




    $this->userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
    ]);
    return redirect()->to('/user');
}


}
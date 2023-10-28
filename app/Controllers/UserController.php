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

    $kelas = $this->kelasModel->getKelas();
    session();   
 

    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
    ];

    return view('create_user',$data);
}
public function store()
{
    $path = 'assets/uploads/img/';

    $foto = $this->request->getFile('foto');

    $name =$foto->getRandomName();

    if ($foto->move($path, $name)) {
       $foto = base_url($path . $name);
    }


    if(!$this->validate([
        'nama' => 'required',
        'npm' => 'required|is_unique[user.npm]'  
        
    ])) {
        $validation = \Config\Services::validation();
        // dd($validation);
         return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
         
     }


    $this->userModel->saveUser([
        'nama'      => $this->request->getVar('nama'),
        'id_kelas'  => $this->request->getVar('kelas'),
        'npm'       => $this->request->getVar('npm'),
        'foto'      => $foto
    ]);
    return redirect()->to('/user');
}
public function show($id){
    $user = $this->userModel->getUser($id);

    $data = [
        'title' => 'Profile',
        'user'  => $user,
    ];

    return view('profile', $data);
}
public function edit($id){
    $user = $this->userModel->getUser($id);
    $kelas = $this->kelasModel->getKelas();

    $data = [
        'title' => 'Edit User',
        'user'  => $user,
        'kelas' => $kelas,
    ];

    return view('edit_user', $data);
}
public function update($id){
    $path = 'assets/uploads/img/';
    $foto = $this->request->getFile('foto');

    $data = [
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
    ];
    

    if ($foto->isValid()) {
        $name = $foto->getRandomName();

        if ($foto->move($path, $name)){
            $foto_path = base_url($path . $name);

            $data['foto'] = $foto_path;
         }
    }

    $result = $this->userModel->updateUser($data, $id);

    if(!$result){
    return redirect()->back()->withInput()
        ->with('error', 'Gagal menyiman data');
}
return redirect()->to(base_url('/user'));
}

public function destroy($id){
    $result = $this->userModel->deleteUser($id);
    if (!$result) {
        return redirect()->back()->with('error', 'Gagal menghapus data');
    }
    return redirect()->to(base_url('/user'))
        ->with('succes', 'Berhasil menghapus data');
    
}

}
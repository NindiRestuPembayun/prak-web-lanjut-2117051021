<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\kelasModel;

class KelasController extends BaseController
{
    public $kelasModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas()
        ];
        return view('list_kelas', $data);
    }
    public function create(){
    
        $data = [
            'title' => 'Create Kelas',
        ];

        return view('create_kelas',$data);
    }

    public function store()
{

    if(!$this->validate([
        'nama' => 'required|is_unique[kelas.nama_kelas]',
        
    ])) {
        $validation = \Config\Services::validation();
         return redirect()->to(base_url('/kelas/create'))->withInput()->with('validation', $validation);
         
     }


    $this->kelasModel->saveKelas([
        'nama_kelas'      => $this->request->getVar('nama'),
    ]);
    return redirect()->to(base_url('/kelas'));
}

public function edit($id){
    $kelas = $this->kelasModel->getKelas($id);

    $data = [
        'title' => 'Edit Kelas',
        'kelas' => $kelas,
    ];

    return view('edit_kelas', $data);
}
public function update($id){

    $data = [
        'nama_kelas' => $this->request->getVar('nama'),
    ];

    $result = $this->kelasModel->updateKelas($data, $id);

    if(!$result){
    return redirect()->back()->withInput()
        ->with('error', 'Gagal menyiman data');
}
return redirect()->to(base_url('/kelas'));
}
public function show($id)
{
    $kelas = $this->kelasModel->getAnggotaKelas($id);
    $data = [
        'title' => 'List anggota kelas',
        'kelas' => $kelas,
    ];
    return view('kelas', $data);
}
    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kelas'))
            ->with('succes', 'Berhasil menghapus data');
        
    }
}

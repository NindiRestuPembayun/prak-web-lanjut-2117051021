<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'npm', 'id_kelas','foto','created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];



    public function getUser($id = null)
    {
        if ($id != null) {
            return $this->select('user.*, kelas.nama_kelas')
                ->join('kelas', 'kelas.id = user.id_kelas')->find($id);
        }
        return $this->select('user.*, kelas.nama_kelas')
        ->join('kelas', 'kelas.id=user.id_kelas')
        ->orderBy('id', 'ASC')
        ->findAll();
    }


    public function saveUser($data)
{
    $this->insert($data);
}


}



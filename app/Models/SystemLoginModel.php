<?php

namespace App\Models;

use CodeIgniter\Model;

class SystemLoginModel extends Model
{
    protected $table      = 'system_users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [];

    protected $useTimestamps = false;
    protected $dateFormat    = '';
    protected $createdField  = '';
    protected $updatedField  = '';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getUserLogin($id)
    {
        $this->select('*');
        $this->where('username',$id);
        $datos = $this->first();

        return $datos;
    }

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class SystemUsersModel extends Model
{
    protected $table      = 'system_users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'username', 
        'name', 
        'email', 
        'password',  
        'active'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_up';
    protected $updatedField  = 'date_update';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getUsers()
    {
        $this->select('system_users.*');
        $this->where('system_users.active','1');
        $datos = $this->findAll();

        return $datos;
    }

    public function getUser($id)
    {
        $this->select('*');
        $this->where('id',$id);
        $datos = $this->first();

        return $datos;
    }

    public function getUsersDeleted()
    {
        $this->select('system_users.*');
        $this->where('system_users.active','0');
        $datos = $this->findAll();

        return $datos;
    }

}
<?php

namespace App\Controllers;

use App\Models\SystemLoginModel;

class Auth extends BaseController
{
    protected 
    $usersLoginModel,
    $login;

    function __construct(){
        $this->usersLoginModel                       = new SystemLoginModel();
    }


    function postValidateUser()
    {
        $usuario    = $this->request->getPost('username');
        $password   = $this->request->getPost('password');

        $usuvalida = $this->usersLoginModel->getUserLogin($usuario);

        if ($usuvalida) 
        {
            if ($password == $usuvalida['password']) 
            {
                $datosSesion = [
                    'iduser'        => $usuvalida['id'],
                    'name'          => $usuvalida['name'],
                    'username'      => $usuvalida['username'],
                ];

                $session    = session();
                $session->set($datosSesion);
                return redirect()->to(base_url());
            }else 
            {
                return redirect()->to(base_url().'login');
            }

        }else 
        {
            return redirect()->to(base_url().'login');
        }
    }

    public function getCloseSession(){

        $session    = session();

        $session->destroy();
        
        return redirect()->to(base_url().'login');
    }
}

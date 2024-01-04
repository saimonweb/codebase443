<?php

namespace App\Controllers;
use App\Models\SystemUsersModel;

class SystemUsers extends BaseController
{
    protected 
    $usersModel,
    $login;

    function __construct(){
        $this->usersModel                       = new SystemUsersModel();
    }


    public function getIndex()
    {
        $login = 1;

        $users = $this->usersModel->getUsers();

        $data = array(
            'titulo'        => "Usuarios Activos",
            'users'         => $users,

        );

        if ($login == 1) {
            echo view('admin/layouts/head');
            echo view('admin/layouts/nav');
            echo view('admin/layouts/aside');
            echo view('admin/users/list',$data);
            echo view('admin/layouts/footer');
        }else {
            echo view('admin/login/content');
        }

    }

    public function getAddUser()
    {
        echo view('admin/users/add');
    }

    function postSaveUser()
    {
        $name                   = $this->request->getPost('name');
        $email                  = $this->request->getPost('email');
        $password               = $this->request->getPost('password');
        $conpassword            = $this->request->getPost('conpassword');

        if ($password == $conpassword) 
        {
            $this->usersModel->save(
            [
                'name'          => $name,
                'username'      => $email,
                'email'         => $email,
                'password'      => $password,
                'active'        => "1",
    
            ]);

            sleep(1);

            return redirect()->to(base_url().'SystemUsers');

        }else {
            echo view('admin/layouts/head');
            echo view('admin/layouts/nav');
            echo view('admin/layouts/aside');
            echo view('admin/users/errorpass');
            echo view('admin/layouts/footer');
        }


    }

    public function getEditUser($id)
    {
        $user    = $this->usersModel->getUser($id);

        $data   = array(
            'user'   => $user,
        );

        echo view('admin/users/edit',$data);
    }

    public function getChangePassUser($id)
    {
        $user    = $this->usersModel->getUser($id);

        $data   = array(
            'user'   => $user,
        );

        echo view('admin/users/chanpass',$data);
    }
    
    function postUpdateUser() 
    {
        $iduser         = $this->request->getPost('iduser');
        $name           = $this->request->getPost('name');
        $email          = $this->request->getPost('email');

        $this->usersModel->update($iduser,
        [
            'name'              => $name,
            'email'             => $email,
        ]);

        sleep(1);

        return redirect()->to(base_url().'SystemUsers');
    }

    function postUpdatePass() 
    {
        $iduser             = $this->request->getPost('iduser');
        $password           = $this->request->getPost('password');
        $conpassword        = $this->request->getPost('conpassword');

        if ($password == $conpassword) {

            $this->usersModel->update($iduser,
            [
                'password'      => $password,
            ]);

            sleep(1);

            return redirect()->to(base_url().'SystemUsers');
        }else {
            echo view('admin/layouts/head');
            echo view('admin/layouts/nav');
            echo view('admin/layouts/aside');
            echo view('admin/users/errorpass');
            echo view('admin/layouts/footer');
        }

    }

    public function getDesUser($id)
    {
        $user    = $this->usersModel->getUser($id);

        $data   = array(
            'user'   => $user,
        );

        echo view('admin/users/deluser',$data);
    }

    function postDesactiveUser() 
    {
        $iduser         = $this->request->getPost('iduser');

        $this->usersModel->update($iduser,
        [
            'active'              => '0',
        ]);

        sleep(1);

        return redirect()->to(base_url().'SystemUsers');
    }

    public function getListUserDeleted()
    {
        $login = 1;

        $users = $this->usersModel->getUsersDeleted();

        $data = array(

            'titulo'    => "Usuarios Eliminados",
            'users'     => $users,

        );

        if ($login == 1) {
            echo view('admin/layouts/head');
            echo view('admin/layouts/nav');
            echo view('admin/layouts/aside');
            echo view('admin/users/listdeleted',$data);
            echo view('admin/layouts/footer');
        }else {
            echo view('admin/login/content');
        }

    }

    public function getReacUser($id)
    {
        $user    = $this->usersModel->getUser($id);

        $data   = array(
            'user'   => $user,
        );

        echo view('admin/users/reacuser',$data);
    }

    function postReactiveUser() 
    {
        $iduser         = $this->request->getPost('iduser');

        $this->usersModel->update($iduser,
        [
            'active'              => '1',
        ]);

        sleep(1);

        return redirect()->to(base_url().'SystemUsers');
    }
    
}

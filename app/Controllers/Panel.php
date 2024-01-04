<?php

namespace App\Controllers;

class Panel extends BaseController
{

    function __construct(){

    }


    public function getIndex()
    {
        if (session('iduser')) {
            echo view('admin/layouts/head');
            echo view('admin/layouts/nav');
            echo view('admin/layouts/aside');
            echo view('admin/layouts/content');
            echo view('admin/layouts/footer');
        }else {
            return redirect()->to(base_url().'login');
        }


    }
}

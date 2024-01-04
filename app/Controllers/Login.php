<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function getIndex()
    {
        echo view('admin/login/content');
    }
}

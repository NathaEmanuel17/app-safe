<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        //
    }
    public function auth()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

    }
}

<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('Admin/login');
    }

    public function daftar()
    {
        return view('Admin/signup');
    }
}

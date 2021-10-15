<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Portofolio'
        ];
        return view('Home/index', $data);
    }
}

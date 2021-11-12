<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\PesanModel;

class Home extends BaseController
{
    protected $dataModel;
    protected $pesanModel;
    public function __construct()
    {
        $this->dataModel = new DataModel();
        $this->pesanModel = new PesanModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Portofolio',
            'konten' => $this->dataModel->getData(1)
        ];


        return view('Home/index', $data);
    }

    public function save()
    {
        $this->pesanModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'pesan' => $this->request->getVar('pesan')
        ]);

        return redirect()->to('Home/index/#kontak');
    }
}

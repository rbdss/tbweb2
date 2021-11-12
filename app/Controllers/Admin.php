<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\PesanModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $userModel;
    protected $dataModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->dataModel = new DataModel();
        $this->pesanModel = new PesanModel();
    }


    public function login()
    {
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/login', $data);
    }

    public function masuk()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        // dd($dataUser);
        if ($dataUser) {
            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'username' => $dataUser['username'],
                    'nama' => $dataUser['nama'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('Admin/index');
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => $this->userModel->getUser()
        ];
        if (is_null(session()->get('logged_in'))) {
            return redirect()->to('/admin');
        }
        return view('Admin/index', $data);
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/admin');
    }


    public function signup()
    {
        $data = [
            'title' => 'Sign Up',
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/signup', $data);
    }
    public function daftar()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => 'Username tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required|matches[password2]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                    'matches' => 'Password tidak sama'
                ]
            ],
            'password2' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Password harus di isi',
                    'matches' => 'Password tidak sama'
                ]
            ]
        ])) {
            return redirect()->to('/admin/signup')->withInput();
        }

        $this->userModel->save([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

        session()->setFlashdata('pesan', 'User berhasil dibuat, silakan login');
        return redirect()->to('/admin');
    }

    public function portofolio()
    {
        $data = [
            'title' => 'Dashboard Portofolio',
            'konten' => $this->dataModel->getData(1)
        ];
        return view('Admin/portofolio', $data);
    }

    public function content()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('Admin/content', $data);
    }

    public function pesan()
    {
        $data = [
            'title' => 'Dashboard',
            'pesan' => $this->pesanModel->getData(),
            'subtitle' => 'Pesan'
        ];
        return view('Admin/pesan', $data);
    }
}

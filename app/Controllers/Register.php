<?php

namespace App\Controllers;

use APP\Models\UsersModel;
use APP\Models\KaryawanModel;

class Register extends BaseController
{

    function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
    }

    public function index()
    {
        $karyawan = $this->karyawanModel->findAll();
        $data = [
            'karyawan' => $karyawan,
        ];
        return view('auth/register', $data);
    }

    public function process()
    {
        if (!$this->validate([
            'id_karyawan' => [
                'rules' => 'required|is_unique[users.id_karyawan]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'Nama sudah digunakan sebelumnya'
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[15]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 15 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'id_karyawan' => $this->request->getVar('id_karyawan'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ]);
        return redirect()->to('/login');
    }
}

<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    protected $JabatanModel;
    public function __construct()
    {
        $this->JabatanModel = new JabatanModel();
    }

    public function jabatan()
    {

        $Jabatan = $this->JabatanModel->findAll();

        $data = [
            'title' => 'Jabatan',
            'jabatan' => $Jabatan
        ];


        return view('admin/jabatan', $data);
    }

    public function add_jabatan()
    {
        $data = [
            'title' => 'Form Tambah Jabatan'
        ];

        return view('insert/add_jabatan', $data);
    }

    public function save_jabatan()
    {
        $this->JabatanModel->save([
            'jabatan' => $this->request->getVar('jabatan'),
            'ket' => $this->request->getVar('ket')
        ]);

        session()->setFlashdata('Pesan', 'Jabatan berhasil ditambahkan.');

        return redirect()->to('/jabatan');
    }
}

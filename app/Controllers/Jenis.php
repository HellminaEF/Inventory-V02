<?php

namespace App\Controllers;

use App\Models\JenisModel;

class Jenis extends BaseController
{
    protected $JenisModel;
    public function __construct()
    {
        $this->JenisModel = new JenisModel();
    }

    public function jenis()
    {

        $Jenis = $this->JenisModel->findAll();

        $data = [
            'title' => 'Jenis',
            'jenis' => $Jenis
        ];


        return view('admin/jenis', $data);
    }

    public function add_jenis()
    {
        $data = [
            'title' => 'Form Tambah Jenis Barang'
        ];

        return view('insert/add_jenis', $data);
    }

    public function save_jenis()
    {
        $this->JenisModel->save([
            'jenis' => $this->request->getVar('jenis'),
            'ket' => $this->request->getVar('ket')
        ]);

        session()->setFlashdata('Pesan', 'Jenis barang berhasil ditambahkan.');

        return redirect()->to('/jenis');
    }
}

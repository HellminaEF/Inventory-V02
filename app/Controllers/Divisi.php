<?php

namespace App\Controllers;

use App\Models\DivisiModel;

class Divisi extends BaseController
{
    protected $DivisiModel;
    public function __construct()
    {
        $this->DivisiModel = new DivisiModel();
    }

    public function divisi()
    {

        $Divisi = $this->DivisiModel->findAll();

        $data = [
            'title' => 'Divisi',
            'divisi' => $Divisi
        ];


        return view('admin/divisi', $data);
    }

    public function add_divisi()
    {
        $data = [
            'title' => 'Form Tambah Divisi'
        ];

        return view('insert/add_divisi', $data);
    }

    public function save_divisi()
    {
        $this->DivisiModel->save([
            'divisi' => $this->request->getVar('divisi'),
            'ket' => $this->request->getVar('ket')
        ]);

        session()->setFlashdata('Pesan', 'Divisi berhasil ditambahkan.');

        return redirect()->to('/divisi');
    }
}

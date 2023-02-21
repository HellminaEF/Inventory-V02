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

    public function edit_jenis()
    {
        $data = [
            'title' => 'Edit Jenis'
        ];

        return view('edit/edit_jenis', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'jenis' => 'required|is_unique[jenis.jenis]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/jenis/add_jenis')->withInput()->with('validation', $validation);
        }

        $this->JenisModel->save([
            'jenis' => $this->request->getVar('jenis'),
            'ket' => $this->request->getVar('ket')
        ]);

        session()->setFlashdata('berhasil', 'Jenis berhasil ditambahkan.');

        return redirect()->to('/jenis/jenis');
    }

    function delete($id_jenis)
    {
        $dataJenis = $this->JenisModel->find($id_jenis);
        if (empty($dataJenis)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jenis Tidak ditemukan !');
        }
        $this->JenisModel->delete($id_jenis);
        session()->setFlashdata('delete', 'Delete Data Jenis Berhasil');
        return redirect()->to('/jenis/jenis');
    }
}

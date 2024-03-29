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

    // public function edit_divisi()
    // {
    //     $data = [
    //         'title' => 'Edit Divisi'
    //     ];

    //     return view('edit/edit_divisi', $data);
    // }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'divisi' => 'required|is_unique[divisi.divisi]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/divisi/add_divisi')->withInput()->with('validation', $validation);
        }

        $this->DivisiModel->save([
            'divisi' => $this->request->getVar('divisi')
        ]);

        session()->setFlashdata('berhasil', 'Divisi berhasil ditambahkan.');

        return redirect()->to('/divisi/divisi');
    }

    function delete($id_divisi)
    {
        $dataDivisi = $this->DivisiModel->find($id_divisi);
        if (empty($dataDivisi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Divisi Tidak ditemukan !');
        }
        $this->DivisiModel->delete($id_divisi);
        session()->setFlashdata('delete', 'Data Divisi Berhasil Dihapus');
        return redirect()->to('/divisi');
    }

    public function edit_divisi($id_divisi)
    {
        $data = [
            'title' => 'Edit Divisi',
            'divisi' => $this->DivisiModel->DetailData($id_divisi),
        ];
        return view('edit/edit_divisi', $data);;
    }

    function update($id_divisi)
    {
        $dataDivisi = $this->DivisiModel->find($id_divisi);
        if (empty($dataDivisi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Divisi Tidak ditemukan !');
        }
        $this->DivisiModel->update($id_divisi, [
            'divisi' => $this->request->getVar('divisi')
        ]);
        session()->setFlashdata('update', 'Data Divisi Berhasil Diupdate');
        return redirect()->to(site_url('divisi'));
    }
}

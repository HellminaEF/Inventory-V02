<?php

namespace App\Controllers;

use App\Models\KdModel;

class Kondisi_dibeli extends BaseController
{
    protected $KdModel;
    public function __construct()
    {
        $this->KdModel = new KdModel();
    }

    public function Kondisi_dibeli()
    {

        $kd = $this->KdModel->findAll();

        $data = [
            'title' => 'Kondisi Saat Dibeli',
            'kd' => $kd
        ];

        return view('admin/kondisi_dibeli', $data);
    }

    public function add_kd()
    {
        $data = [
            'title' => 'Form Tambah Kondisi'
        ];

        return view('insert/add_kd', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'kondisi_dibeli' => 'required|is_unique[kondisi_dibeli.kondisi_dibeli]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kondisi_dibeli/add_kd')->withInput()->with('validation', $validation);
        }

        $this->KdModel->save([
            'kondisi_dibeli' => $this->request->getVar('kondisi_dibeli')
        ]);

        session()->setFlashdata('berhasil', 'Kondisi berhasil ditambahkan.');

        return redirect()->to('/kondisi_dibeli/kondisi_dibeli');
    }

    function delete($id_kdibeli)
    {
        $dataKd = $this->KdModel->find($id_kdibeli);
        if (empty($dataKd)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kondisi Tidak ditemukan !');
        }
        $this->KdModel->delete($id_kdibeli);
        session()->setFlashdata('delete', 'Data Kondisi Berhasil Dihapus');
        return redirect()->to('/kondisi_dibeli/kondisi_dibeli');
    }

    public function edit_kd($id_kdibeli)
    {
        $data = [
            'title' => 'Edit kondisi dibeli',
            'kd' => $this->KdModel->DetailData($id_kdibeli),
        ];
        return view('edit/edit_kd', $data);
    }

    function update($id_kdibeli)
    {
        $datakd = $this->KdModel->find($id_kdibeli);
        if (empty($datakd)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kondisi Tidak ditemukan !');
        }
        $this->KdModel->update($id_kdibeli, [
            'kondisi_dibeli' => $this->request->getVar('kondisi_dibeli')
        ]);
        session()->setFlashdata('update', 'Data Kondisi Berhasil Diupdate');
        return redirect()->to(site_url('kondisi_dibeli'));
    }

    // function kode()
    // {
    //     return json_encode($this->JenisModel->generateCode());
    // }
}

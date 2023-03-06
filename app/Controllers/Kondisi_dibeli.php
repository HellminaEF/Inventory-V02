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
            'kd' => 'required|is_unique[kondisi_dibeli.kondisi_dibeli]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kondisi_dibeli/add_kd')->withInput()->with('validation', $validation);
        }

        $this->KdModel->save([
            'kd' => $this->request->getVar('kondisi_dibeli')
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

    // public function edit_jenis($id_jenis)
    // {
    //     $data = [
    //         'title' => 'Edit Jenis',
    //         'jenis' => $this->JenisModel->DetailData($id_jenis),
    //     ];
    //     return view('edit/edit_jenis', $data);
    // }

    // function kode()
    // {
    //     return json_encode($this->JenisModel->generateCode());
    // }
}

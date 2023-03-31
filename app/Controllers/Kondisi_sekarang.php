<?php

namespace App\Controllers;

use App\Models\KsModel;

class Kondisi_sekarang extends BaseController
{
    protected $KsModel;
    public function __construct()
    {
        $this->KsModel = new KsModel();
    }

    public function Kondisi_sekarang()
    {

        $ks = $this->KsModel->findAll();

        $data = [
            'title' => 'Kondisi Sekarang',
            'ks' => $ks
        ];

        return view('admin/kondisi_sekarang', $data);
    }

    public function add_ks()
    {
        $data = [
            'title' => 'Form Tambah Kondisi'
        ];

        return view('insert/add_ks', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'kondisi_sekarang' => 'required|is_unique[kondisi_sekarang.id_ksekarang]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kondisi_dibeli/add_kd')->withInput()->with('validation', $validation);
        }

        $this->KsModel->save([
            'kondisi_sekarang' => $this->request->getVar('kondisi_sekarang')
        ]);

        session()->setFlashdata('berhasil', 'Kondisi berhasil ditambahkan.');

        return redirect()->to('/kondisi_sekarang/kondisi_sekarang');
    }

    function delete($id_ksekarang)
    {
        $dataKs = $this->KsModel->find($id_ksekarang);
        if (empty($dataKs)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kondisi Tidak ditemukan !');
        }
        $this->KsModel->delete($id_ksekarang);
        session()->setFlashdata('delete', 'Data Kondisi Berhasil Dihapus');
        return redirect()->to('/kondisi_sekarang/kondisi_sekarang');
    }

    public function edit_ks($id_ksekarang)
    {
        $data = [
            'title' => 'Edit Kondisi Sekarang',
            'ks' => $this->KsModel->DetailData($id_ksekarang),
        ];
        return view('edit/edit_ks', $data);
    }

    function update($id_ksekarang)
    {
        $dataks = $this->KsModel->find($id_ksekarang);
        if (empty($dataks)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jenis Kondisi ditemukan !');
        }
        $this->KsModel->update($id_ksekarang, [
            'kondisi_sekarang' => $this->request->getVar('kondisi_sekarang')
        ]);
        session()->setFlashdata('update', 'Data Kondisi Berhasil Diupdate');
        return redirect()->to(site_url('kondisi_sekarang'));
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

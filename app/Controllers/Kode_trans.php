<?php

namespace App\Controllers;

use App\Models\KodetransModel;

class Kode_trans extends BaseController
{
    protected $KodetransModel;
    public function __construct()
    {
        $this->KodetransModel = new KodetransModel();
    }

    public function kode_trans()
    {

        $kt = $this->KodetransModel->findAll();

        $data = [
            'title' => 'Kode Transaksi',
            'kt' => $kt
        ];

        return view('admin/kode_trans', $data);
    }

    public function add_kt()
    {
        $data = [
            'title' => 'Form Tambah Kode Transaksi'
        ];

        return view('insert/add_kodetrans', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'kt' => 'required|is_unique[kode_transaksi.kode_trans]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kodet_trans/add_kt')->withInput()->with('validation', $validation);
        }

        $this->KodetransModel->save([
            'pj' => $this->request->getVar('kode_transaksi')
        ]);

        session()->setFlashdata('berhasil', 'Kode Transaksi berhasil ditambahkan.');

        return redirect()->to('/kode_trans/kode_trans');
    }

    function delete($id_ktrans)
    {
        $dataKt = $this->kodeTransModel->find($id_ktrans);
        if (empty($dataKt)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kode Trans Tidak ditemukan !');
        }
        $this->KodetransModel->delete($id_ktrans);
        session()->setFlashdata('delete', 'Data Kode Transaksi Berhasil Dihapus');
        return redirect()->to('/kode_trans/kode_trans');
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

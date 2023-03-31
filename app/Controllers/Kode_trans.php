<?php

namespace App\Controllers;

use App\Models\KodetransModel;

class Kode_trans extends BaseController
{
    protected $KodetransModel;
    public function __construct()
    {
        $this->kodetrans = new KodetransModel();
    }

    public function kode_trans()
    {

        $kt = $this->kodetrans->findAll();

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
        $data = $this->request->getPost();
        $this->kodetrans->insert($data);
        return redirect()->to(site_url('kode_trans'))->with('berhasil', 'Kode Transaksi Berhasil Ditambahkan.');
    }

    function delete($id_ktrans)
    {
        $dataKt = $this->kodetrans->find($id_ktrans);
        if (empty($dataKt)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kode Trans Tidak ditemukan !');
        }
        $this->kodetrans->delete($id_ktrans);
        session()->setFlashdata('delete', 'Data Kode Transaksi Berhasil Dihapus');
        return redirect()->to('/kode_trans/kode_trans');
    }

    public function edit_kt($id_ktrans)
    {
        $data = [
            'title' => 'Edit Kode Transaksi',
            'kt' => $this->kodetrans->DetailData($id_ktrans)
        ];
        return view('edit/edit_kodetrans', $data);
    }

    function update($id_ktrans)
    {
        $dataktrans = $this->kodetrans->find($id_ktrans);
        if (empty($dataktrans)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kode Transaksi Tidak ditemukan !');
        }
        $this->kodetrans->update($id_ktrans, [
            'kode_trans' => $this->request->getVar('kode_trans'),
            'jenis_trans' => $this->request->getVar('jenis_trans')
        ]);
        session()->setFlashdata('update', 'Data Kode Transaksi Berhasil Diupdate');
        return redirect()->to(site_url('kode_trans'));
    }

    // function kode()
    // {
    //     return json_encode($this->JenisModel->generateCode());
    // }
}

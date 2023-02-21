<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $BarangModel;
    public function __construct()
    {
        $this->BarangModel = new BarangModel();
        // $this->load->model(['BarangModel', 'JenisModel']);
    }

    public function barang()
    {

        $Barang = $this->BarangModel->findAll();

        $data = [
            'title' => 'Barang Inventaris',
            'barang' => $Barang
        ];


        return view('admin/barang', $data);
    }

    public function add_barang()
    {
        $data = [
            'title' => 'Form Tambah Barang',
        ];

        return view('insert/add_barang', $data);
    }

    public function desc_barang()
    {
        $data = [
            'title' => 'Form Tambah Deskripsi Barang'
        ];

        return view('insert/desc_barang', $data);
    }

    public function det_barang()
    {
        $data = [
            'title' => 'Detail Barang'
        ];

        return view('detail/det_barang', $data);
    }

    public function edit_barang()
    {
        $data = [
            'title' => 'Edit Barang Inventaris'
        ];

        return view('edit/edit_barang', $data);
    }

    public function import_barang()
    {
        $data = [
            'title' => 'Import Barang Inventaris'
        ];

        return view('insert/import_barang', $data);
    }

    public function save()
    {
        //validasi input
        // if (!$this->validate([
        //     'divisi' => 'required|is_unique[divisi.divisi]'
        // ])) 

        $this->BarangModel->save([
            'barang' => $this->request->getVar('barang'),
            'merk' => $this->request->getVar('merk'),
            'id_jenis' => $this->request->getVar('id_jenis'),
            'tperoleh' => $this->request->getVar('tperoleh'),
            'masa_guna' => $this->request->getVar('masa_guna'),
            'harga' => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('berhasil', 'Barang berhasil ditambahkan.');

        return redirect()->to('/barang/barang');
    }

    function delete($id_barang)
    {
        $dataBarang = $this->BarangModel->find($id_barang);
        if (empty($dataBarang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
        }
        $this->BarangModel->delete($id_barang);
        session()->setFlashdata('delete', 'Data Barang Berhasil Dihapus');
        return redirect()->to('/barang');
    }

    public function join()
    {
        $model = new BarangModel();
        $data['barang'] = $model->getBarang();
        echo view('/barang',$data);
    }
}

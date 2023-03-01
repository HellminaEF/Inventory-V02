<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\BarangModel;
use App\Models\KaryawanModel;

class Transaksi extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->barang = new BarangModel();
        // $this->jenis = new JenisModel();
    }

    public function transaksi()
    {

        $transaksi = $this->transaksi->getAll();

        $data = [
            'title' => 'Transaksi Inventaris',
            'transaksi' => $transaksi
        ];

        return view('admin/transaksi', $data);
    }

    public function pil_bar()
    {

        $barang = $this->barang->getAll();

        $data = [
            'title' => 'Pilih Barang Inventaris',
            'barang' => $barang
        ];

        return view('insert/pil_bar', $data);
    }

    public function getdata()
    {
        // $barang = $this->barang->findAll();
        // $data = [
        //     'barang' => $barang
        // ];
        // return view('admin/transaksi', $data);

        $barang = new BarangModel();
        $data['barang'] = $barang->findAll();
        echo "<pre>";
        echo print_r($data);
        echo "</pre>";
    }

    public function add_transaksi()
    {
        $data = [
            'title' => 'Buat Transaksi Inventaris',
        ];

        return view('insert/add_transaksi', $data);
    }

    // public function delete($id_trans)
    // {
    //     $this->TransaksiModel->delete($id_trans);
    //     return redirect()->to('/transaksi');
    // }
}

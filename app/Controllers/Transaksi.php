<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\BarangModel;
use App\Models\JenisModel;
use App\Models\KaryawanModel;
use App\Models\KodetransModel;

class Transaksi extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->barang = new BarangModel();
        $this->jenis = new JenisModel();
        $this->karyawan = new KaryawanModel();
        $this->kt = new KodetransModel();
    }

    public function transaksi()
    {
        $keyword = $this->request->getGet('keyword');
        $transaksi = $this->transaksi->getSearch($keyword);
        // $transaksi = $this->transaksi->getAll();
        $data = [
            'title' => 'Transaksi Inventaris',
            'transaksi' => $transaksi
        ];
        // dd($transaksi);
        return view('admin/transaksi', $data);
    }

    public function pil_bar()
    {

        $barang = $this->barang->getAll();
        $jenis = $this->jenis->findAll();
        $data = [
            'title' => 'Pilih Barang Inventaris',
            'barang' => $barang,
            'jenis' => $jenis
        ];

        return view('insert/pil_bar', $data);
    }

    public function add_transaksi()
    {
        $barang = $this->barang->findAll();
        $karyawan = $this->karyawan->findAll();
        $kodetrans = $this->kt->findAll();
        $data = [
            'title' => 'Form Tambah Karyawan',
            'barang' => $barang,
            'karyawan' => $karyawan,
            'kodetrans' => $kodetrans
        ];

        return view('insert/add_transaksi', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->transaksi->insert($data);
        return redirect()->to(site_url('transaksi'))->with('berhasil', 'Transaksi Berhasil Dibuat.');
    }


    public function u_barang()
    {
        $data = [
            'title' => 'Barang Inventaris',
        ];

        $session = \config\service::session();
        $session->set();

        return view('user/barang', $data);
    }

    public function det_trans($id_trans = null)
    {
        $transaksi = $this->transaksi->find($id_trans);
        $barang = $this->barang->findAll();
        $karyawan = $this->karyawan->findAll();
        $kodetrans = $this->kt->findAll();
        if (is_object($transaksi)) {
            $data = [
                'title' => 'Detail Barang',
                'transaksi' => $transaksi,
                'barang' => $barang,
                'karyawan' => $karyawan,
                'kodetrans' => $kodetrans
            ];

            return view('detail/det_trans', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    // public function getdata()
    // {
    // $barang = $this->barang->findAll();
    // $data = [
    //     'barang' => $barang
    // ];
    // return view('admin/transaksi', $data);

    //     $barang = new BarangModel();
    //     $data['barang'] = $barang->findAll();
    //     echo "<pre>";
    //     echo print_r($data);
    //     echo "</pre>";
    // }

    // public function add_transaksi($id_barang)
    // {
    //     $data = [
    //         'title' => 'Buat Transaksi Inventaris',
    //         'barang' => $this->barang->DetailData($id_barang),
    //     ];

    //     return view('insert/add_transaksi', $data);
    // }

}

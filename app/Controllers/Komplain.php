<?php

namespace App\Controllers;

use App\Models\KomplainModel;
use App\Models\KaryawanModel;
use App\Models\BarangModel;
use App\Models\KsModel;

class Komplain extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->komplain = new KomplainModel();
        $this->karyawan = new KaryawanModel();
        $this->barang = new BarangModel();
        $this->ks = new KsModel();
    }

    public function komplain()
    {
        $komplain = $this->komplain->getAll();
        $data = [
            'title' => 'Form Komplain',
            'komplain' => $komplain,
        ];

        return view('admin/komplain', $data);
    }

    public function u_komplain()
    {
        $komplain = $this->komplain->getAll();
        $data = [
            'title' => 'Form Komplain',
            'komplain' => $komplain,
        ];

        return view('user/u_komplain', $data);
    }

    public function add_komplain()
    {
        $karyawan = $this->karyawan->findAll();
        $barang = $this->barang->findAll();
        $ks = $this->ks->findAll();
        $data = [
            'title' => 'Form Komplain',
            'karyawan' => $karyawan,
            'barang' => $barang,
            'ks' => $ks,
        ];

        return view('insert/add_komplain', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->komplain->insert($data);
        return redirect()->to(site_url('u_komplain'))->with('berhasil', 'Komentar Berhasil Di Upload.');
    }

    function delete($id_komplain)
    {
        $dataKomplain = $this->komplain->find($id_komplain);
        if (empty($dataKomplain)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $this->komplain->delete($id_komplain);
        session()->setFlashdata('delete', 'Komplain Berhasil Dihapus');
        return redirect()->to(site_url('u_komlpain'));
    }
}

<?php

namespace App\Controllers;

use App\Models\HistoryModel;
use App\Models\KomplainModel;
use App\Models\KaryawanModel;
use App\Models\BarangModel;
use App\Models\KsModel;

class History extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->history = new HistoryModel();
        $this->komplain = new KomplainModel();
        $this->karyawan = new KaryawanModel();
        $this->barang = new BarangModel();
        $this->ks = new KsModel();
    }

    public function history()
    {
        $history = $this->history->getAll();
        $data = [
            'title' => 'History Barang',
            'history' => $history,
        ];

        return view('admin/history', $data);
    }

    public function u_history()
    {
        $history = $this->history->getAll();
        $data = [
            'title' => 'History Barang',
            'history' => $history,
        ];

        return view('user/u_history', $data);
    }

    public function add_history()
    {
        $karyawan = $this->karyawan->findAll();
        $barang = $this->barang->findAll();
        $data = [
            'title' => 'Form History',
            'karyawan' => $karyawan,
            'barang' => $barang,
        ];

        return view('insert/add_history', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->history->insert($data);
        return redirect()->to(site_url('u_history'))->with('berhasil', 'History Berhasil Di Upload.');
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

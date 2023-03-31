<?php

namespace App\Controllers;

use App\Models\KomplainModel;
use App\Models\KaryawanModel;
use App\Models\BarangModel;
use App\Models\KsModel;
use App\Models\TransaksiModel;
use App\Models\UserModel;

class Komplain extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $session = session();
        $this->komplain = new KomplainModel();
        $this->karyawan = new KaryawanModel();
        $this->barang = new BarangModel();
        $this->ks = new KsModel();
        $this->transaksi = new TransaksiModel();
        $this->user = new UserModel();
    }

    public function komplain()
    {
        $session = session();
        // $komplain = $this->komplain->getAll();
        $komplain = $this->komplain->getKomplainUser($session->get('id_karyawan'));
        // $komplain = $this->komplain->getAll();
        $data = [
            'title' => 'Form Komplain',
            'komplain' => $komplain,
        ];

        return view('admin/komplain', $data);
    }

    public function u_komplain()
    {
        $session = session();
        // $komplain = $this->komplain->getAll();
        $komplain = $this->komplain->getKomplainUser($session->get('id_karyawan'));
        // dd($komplain);
        $data = [
            'title' => 'Form Komplain',
            'komplain' => $komplain,
        ];

        return view('user/u_komplain', $data);
    }

    public function add_komplain()
    {
        $session = session();
        $trans = $this->transaksi->getTransaksiUser($session->get('id_karyawan'));
        // dd($trans);
        $karyawan = $this->karyawan->findAll();
        $barang = $this->barang->findAll();
        $transaksi = $this->transaksi->findAll();
        $ks = $this->ks->findAll();
        $data = [
            'title' => 'Form Komplain',
            'karyawan' => $karyawan,
            'barang' => $barang,
            'transaksi' => $transaksi,
            'ks' => $ks,
            'trans' => $trans,
        ];

        return view('insert/add_komplain', $data);
    }

    public function valid_komplain()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //masukan data ke database
        $this->komplain->save([
            't_komplain' => $data['t_komplain'],
            'id_trans' => $data['id_transaksi'],
            'keterangan' => $data['keterangan']
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('s_komplain', 'Komplain Berhasil di Upload');
        return redirect()->to('/u_komplain');
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

    public function edit_komplain($id_komplain)
    {
        $data = [
            'title' => 'Edit Komplain',
            'komplain' => $this->komplain->DetailData($id_komplain),
        ];
        return view('edit/edit_komplain', $data);
    }

    function update($id_komplain)
    {
        $datakomplain = $this->komplain->find($id_komplain);
        if (empty($datakomplain)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $this->komplain->update($id_komplain, [
            'approve' => $this->request->getVar('approve')
        ]);
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to(site_url('komplain'));
    }

    // public function update($id_komplain)
    // {
    //     $data = $this->request->getPost();
    //     $this->komplain->update($id_komplain, $data);
    //     return redirect()->to(site_url('komplain'))->with('update', 'Data Berhasil Diupdate');
    // }
}

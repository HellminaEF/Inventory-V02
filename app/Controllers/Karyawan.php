<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\DivisiModel;
use App\Models\JabatanModel;

class Karyawan extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->karyawan = new KaryawanModel();
        $this->divisi = new DivisiModel();
        $this->jabatan = new JabatanModel();
    }

    public function karyawan()
    {

        $Karyawan = $this->karyawan->getAll();

        $data = [
            'title' => 'Karyawan',
            'karyawan' => $Karyawan
        ];

        return view('admin/karyawan', $data);
    }

    public function add_karyawan()
    {
        $divisi = $this->divisi->findAll();
        $jabatan = $this->jabatan->findAll();
        $data = [
            'title' => 'Form Tambah Karyawan',
            'divisi' => $divisi,
            'jabatan' => $jabatan
        ];

        return view('insert/add_karyawan', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->karyawan->insert($data);
        return redirect()->to(site_url('karyawan'))->with('berhasil', 'Karyawan Berhasil Ditambahkan.');
    }

    // protected $KaryawanModel;
    // public function __construct()
    // {
    //     $this->KaryawanModel = new KaryawanModel();
    // }

    // public function karyawan()
    // {

    //     $Karyawan = $this->KaryawanModel->findAll();

    //     $data = [
    //         'title' => 'Karyawan',
    //         'karyawan' => $Karyawan
    //     ];


    //     return view('admin/karyawan', $data);
    // }

    // public function add_karyawan()
    // {
    //     $data = [
    //         'title' => 'Form Tambah Karyawan'
    //     ];

    //     return view('insert/add_karyawan', $data);
    // }

    // public function edit_karyawan()
    // {
    //     $data = [
    //         'title' => 'Edit Karyawan'
    //     ];

    //     return view('edit/edit_karyawan', $data);
    // }

    // public function save_karyawan()
    // {
    //     //validasi input
    //     // if (!$this->validate([
    //     //     'divisi' => 'required|is_unique[divisi.divisi]'
    //     // ])) 

    //     $this->KaryawanModel->save([
    //         'karyawan' => $this->request->getVar('karyawan'),
    //         'id_divisi' => $this->request->getVar('id_divisi'),
    //         'id_jabatan' => $this->request->getVar('id_jabatan'),
    //         'status' => $this->request->getVar('status'),
    //         'ket' => $this->request->getVar('ket')
    //     ]);

    //     session()->setFlashdata('Pesan', 'Karyawan berhasil ditambahkan.');

    //     return redirect()->to('/karyawan');
    // }

    // function delete($id_karyawan)
    // {
    //     $dataKaryawan = $this->KaryawanModel->find($id_karyawan);
    //     if (empty($dataKaryawan)) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Karyawan Tidak ditemukan !');
    //     }
    //     $this->KaryawanModel->delete($id_karyawan);
    //     session()->setFlashdata('delete', 'Data Karyawan Berhasil Dihapus');
    //     return redirect()->to('/karyawan');
    // }
}

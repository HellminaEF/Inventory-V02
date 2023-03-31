<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\DivisiModel;
use App\Models\JabatanModel;
use App\Models\StatusModel;

class Karyawan extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->karyawan = new KaryawanModel();
        $this->divisi = new DivisiModel();
        $this->jabatan = new JabatanModel();
        $this->status = new StatusModel();
    }

    public function karyawan()
    {
        $Karyawan = $this->karyawan->getAll();
        $status = $this->status->findAll();
        $data = [
            'title' => 'Karyawan',
            'karyawan' => $Karyawan,
            'status' => $status
        ];

        return view('admin/karyawan', $data);
    }

    public function add_karyawan()
    {
        $divisi = $this->divisi->findAll();
        $jabatan = $this->jabatan->findAll();
        $status = $this->status->findAll();
        $data = [
            'title' => 'Form Tambah Karyawan',
            'divisi' => $divisi,
            'jabatan' => $jabatan,
            'status' => $status
        ];

        return view('insert/add_karyawan', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->karyawan->insert($data);
        return redirect()->to(site_url('karyawan'))->with('berhasil', 'Karyawan Berhasil Ditambahkan.');
    }

    function delete($id_karyawan)
    {
        $dataKaryawan = $this->karyawan->find($id_karyawan);
        if (empty($dataKaryawan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Karyawan Tidak ditemukan !');
        }
        $this->karyawan->delete($id_karyawan);
        session()->setFlashdata('delete', 'Data Karyawan Berhasil Dihapus');
        return redirect()->to(site_url('karyawan'));
    }

    public function edit_karyawan($id_karyawan = null)
    {
        $karyawan = $this->karyawan->find($id_karyawan);
        $divisi = $this->divisi->findAll();
        $jabatan = $this->jabatan->findAll();
        $status = $this->status->findAll();
        if (is_object($karyawan)) {
            $data = [
                'title' => 'Edit Data Karyawan',
                'karyawan' => $karyawan,
                'divisi' => $divisi,
                'jabatan' => $jabatan,
                'status' => $status
            ];

            return view('edit/edit_karyawan', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id_karyawan = null)
    {
        $data = $this->request->getPost();
        $this->karyawan->update($id_karyawan, $data);
        return redirect()->to(site_url('karyawan'))->with('update', 'Data Karyawan Diupdate');
    }

    public function det_karyawan($id_karyawan = null)
    {
        $karyawan = $this->karyawan->find($id_karyawan);
        $divisi = $this->divisi->findAll();
        $jabatan = $this->jabatan->findAll();
        $status = $this->status->findAll();
        if (is_object($karyawan)) {
            $data = [
                'title' => 'Detail Barang',
                'karyawan' => $karyawan,
                'divisi' => $divisi,
                'jabatan' => $jabatan,
                'status' => $status
            ];

            return view('detail/det_karyawan', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    // public function kode()
    // {
    //     $data['kode'] = $this->KaryawanModel->buat_kode();
    //     $this->load->view('karyawan', $data);
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

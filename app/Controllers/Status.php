<?php

namespace App\Controllers;

use App\Models\StatusModel;

class Status extends BaseController
{
    protected $StatusModel;
    public function __construct()
    {
        $this->status = new StatusModel();
    }

    public function status()
    {

        $Status = $this->status->findAll();

        $data = [
            'title' => 'Status Karyawan',
            'status' => $Status
        ];


        return view('admin/status', $data);
    }

    public function add_status()
    {
        $data = [
            'title' => 'Form Tambah Status'
        ];

        return view('insert/add_status', $data);
    }

    // public function edit_divisi()
    // {
    //     $data = [
    //         'title' => 'Edit Divisi'
    //     ];

    //     return view('edit/edit_divisi', $data);
    // }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'status' => 'required|is_unique[status.status]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/status/add_status')->withInput()->with('validation', $validation);
        }

        $this->status->save([
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('berhasil', 'Status Karyawan berhasil ditambahkan.');

        return redirect()->to('/status/status');
    }

    function delete($id_status)
    {
        $dataStatus = $this->DivisiModel->find($id_status);
        if (empty($dataStatus)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Status Tidak ditemukan !');
        }
        $this->status->delete($id_divisi);
        session()->setFlashdata('delete', 'Data Status Berhasil Dihapus');
        return redirect()->to('/status');
    }

    public function edit_divisi($id_status)
    {
        $data = [
            'title' => 'Edit Status Karyawan',
            'divisi' => $this->status->DetailData($id_status),
        ];
        return view('edit/edit_status', $data);

        // $this->JenisModel->update($id_jenis, [
        //     'jenis' => $this->request->getPost('jenis'),
        // ]);

        // return redirect('jenis')->with('success', 'Data Berhasil di Update');
    }
}

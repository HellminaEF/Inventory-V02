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

    public function edit_status($id_status)
    {
        $data = [
            'title' => 'Edit status',
            'status' => $this->status->DetailData($id_status),
        ];
        return view('edit/edit_status', $data);
    }

    function update($id_status)
    {
        $datastatus = $this->status->find($id_status);
        if (empty($datastatus)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data status Tidak ditemukan !');
        }
        $this->status->update($id_status, [
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('update', 'Data status Berhasil Diupdate');
        return redirect()->to(site_url('status'));
    }
}

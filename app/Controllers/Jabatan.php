<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    protected $JabatanModel;
    public function __construct()
    {
        $this->JabatanModel = new JabatanModel();
    }

    public function jabatan()
    {

        $Jabatan = $this->JabatanModel->findAll();

        $data = [
            'title' => 'Jabatan',
            'jabatan' => $Jabatan
        ];


        return view('admin/jabatan', $data);
    }

    public function add_jabatan()
    {
        $data = [
            'title' => 'Form Tambah Jabatan'
        ];

        return view('insert/add_jabatan', $data);
    }

    public function edit_jabatan()
    {
        $data = [
            'title' => 'Edit Jabatan'
        ];

        return view('edit/edit_jabatan', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'jabatan' => 'required|is_unique[jabatan.jabatan]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/jabatan/add_jabatan')->withInput()->with('validation', $validation);
        }

        $this->JabatanModel->save([
            'jabatan' => $this->request->getVar('jabatan'),
            'ket' => $this->request->getVar('ket')
        ]);

        session()->setFlashdata('berhasil', 'Jabatan berhasil ditambahkan.');

        return redirect()->to('/jabatan/jabatan');
    }

    public function delete($id_jabatan)
    {
        /**
         * model initialize
         */
        $jabatanModel = new JabatanModel();

        $jabatan = $jabatanModel->find($id_jabatan);

        if ($jabatan) {
            $jabatanModel->delete($id_jabatan);

            //flash message
            session()->setFlashdata('delete', 'Jabatan Berhasil Dihapus');

            return redirect()->to(base_url('jabatan'));
        }
    }
}

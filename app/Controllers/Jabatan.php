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

    // public function edit_jabatan()
    // {
    //     $data = [
    //         'title' => 'Edit Jabatan'
    //     ];

    //     return view('edit/edit_jabatan', $data);
    // }

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
            'jabatan' => $this->request->getVar('jabatan')
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

    public function edit_jabatan($id_jabatan)
    {
        $data = [
            'title' => 'Edit Jabatan',
            'jabatan' => $this->JabatanModel->DetailData($id_jabatan),
        ];
        return view('edit/edit_jabatan', $data);
    }

    function update($id_jabatan)
    {
        $datajabatan = $this->JabatanModel->find($id_jabatan);
        if (empty($datajabatan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jabatan Tidak ditemukan !');
        }
        $this->JabatanModel->update($id_jabatan, [
            'jabatan' => $this->request->getVar('jabatan')
        ]);
        session()->setFlashdata('update', 'Data Jabatan Berhasil Diupdate');
        return redirect()->to(site_url('jabatan'));
    }
}

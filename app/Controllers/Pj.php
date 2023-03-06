<?php

namespace App\Controllers;

use App\Models\PjModel;

class Pj extends BaseController
{
    protected $PjModel;
    public function __construct()
    {
        $this->PjModel = new PjModel();
    }

    public function penanggung_jawab()
    {

        $pj = $this->PjModel->findAll();

        $data = [
            'title' => 'Penanggung Jawab',
            'pj' => $pj
        ];

        return view('admin/penanggung_jawab', $data);
    }

    public function add_pj()
    {
        $data = [
            'title' => 'Form Tambah Penanggung Jawab'
        ];

        return view('insert/add_pj', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'pj' => 'required|is_unique[penanggung_jawab.penanggung_jawab]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pj/add_pj')->withInput()->with('validation', $validation);
        }

        $this->PjModel->save([
            'pj' => $this->request->getVar('penanggung_jawab')
        ]);

        session()->setFlashdata('berhasil', 'Penanggung Jawab berhasil ditambahkan.');

        return redirect()->to('/pj/penanggung_jawab');
    }

    function delete($id_pj)
    {
        $dataPj = $this->PjModel->find($id_pj);
        if (empty($dataPj)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Penanggung Jawab Tidak ditemukan !');
        }
        $this->PjModel->delete($id_pj);
        session()->setFlashdata('delete', 'Data Penanggung Jawab Berhasil Dihapus');
        return redirect()->to('/pj/penanggung_jawab');
    }

    // public function edit_jenis($id_jenis)
    // {
    //     $data = [
    //         'title' => 'Edit Jenis',
    //         'jenis' => $this->JenisModel->DetailData($id_jenis),
    //     ];
    //     return view('edit/edit_jenis', $data);
    // }

    // function kode()
    // {
    //     return json_encode($this->JenisModel->generateCode());
    // }
}

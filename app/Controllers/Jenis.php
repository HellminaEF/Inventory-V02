<?php

namespace App\Controllers;

use App\Models\JenisModel;

class Jenis extends BaseController
{
    protected $JenisModel;
    public function __construct()
    {
        $this->JenisModel = new JenisModel();
    }

    public function jenis()
    {

        $jenis = $this->JenisModel->findAll();

        $data = [
            'title' => 'Jenis',
            'jenis' => $jenis
        ];

        return view('admin/jenis', $data);
    }

    public function add_jenis()
    {
        $data = [
            'title' => 'Form Tambah Jenis Barang'
        ];

        return view('insert/add_jenis', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'jenis' => 'required|is_unique[jenis.jenis]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/jenis/add_jenis')->withInput()->with('validation', $validation);
        }

        // $this->load->model("JenisModel", "JenisModel");
        // $data['kodeJenis']  = $this->JenisModel->generateKodeJenis();
        // $this->load->view("insert/add_jenis", $data);

        $this->JenisModel->save([
            'jenis' => $this->request->getVar('jenis')
        ]);

        session()->setFlashdata('berhasil', 'Jenis Barang berhasil ditambahkan.');

        return redirect()->to('/jenis/jenis');
    }

    function delete($id_jenis)
    {
        $dataJenis = $this->JenisModel->find($id_jenis);
        if (empty($dataJenis)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jenis Tidak ditemukan !');
        }
        $this->JenisModel->delete($id_jenis);
        session()->setFlashdata('delete', 'Data Jenis Barang Berhasil Dihapus');
        return redirect()->to('/jenis/jenis');
    }

    public function edit_jenis($id_jenis)
    {
        $data = [
            'title' => 'Edit Jenis',
            'jenis' => $this->JenisModel->DetailData($id_jenis),
        ];
        return view('edit/edit_jenis', $data);
    }

    function kode()
    {
        return json_encode($this->JenisModel->generateCode());
    }

    // function edit_jenis($id_jenis)
    // {
    //     $dataJenis = $this->JenisModel->find($id_jenis);
    //     if (empty($dataJenis)) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jenis Tidak ditemukan !');
    //     }
    //     $data['jenis'] = $dataJenis;
    //     $title = [
    //         'title' => 'Edit Jenis'
    //     ];
    //     return view('edit/edit_jenis', $data, $title);
    // }

    // public function update($id_jenis)
    // {
    //     if (!$this->validate([
    //         'jenis' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi'
    //             ]
    //         ],
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back();
    //     }

    //     $this->JenisModel->update($id_jenis, [
    //         'jenis' => $this->request->getVar('jenis')
    //     ]);
    //     session()->setFlashdata('update', 'Update Data Jenis Berhasil');
    //     return redirect()->to('/jenis');
    // }
}

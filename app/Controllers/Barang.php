<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\JenisModel;
use App\Models\KdModel;
use App\Models\PjModel;

class Barang extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->barang = new BarangModel();
        $this->jenis = new JenisModel();
        $this->Kd = new KdModel();
        $this->pj = new PjModel();
    }

    public function barang()
    {
        $keyword = $this->request->getGet('keyword');
        $Barang = $this->barang->getSearch($keyword);
        // $Barang = $this->barang->paginate(5);
        // $Barang = $this->barang->getAll();
        $jenis = $this->jenis->findAll();
        // $pager = $this->barang->pager;
        $data = [
            'title' => 'Barang Inventaris',
            'barang' => $Barang,
            'jenis' => $jenis,
            // 'pager' => $pager
        ];
        // dd($Barang);
        return view('admin/barang', $data);
    }

    public function u_barang()
    {

        // $data['barang'] = $Barang->paginate(5, 'barang');
        // $data['pager'] = $Barang->pager;
        $Barang = $this->barang->getAll();
        $jenis = $this->jenis->findAll();
        $data = [
            'title' => 'Barang Inventaris',
            'barang' => $Barang,
            'jenis' => $jenis
        ];

        return view('user/barang', $data);
    }

    public function add_barang()
    {
        $barang = $this->barang->autoCode();
        $jenis = $this->jenis->findAll();
        $Kd = $this->Kd->findAll();
        $Pj = $this->pj->findAll();
        $data = [
            'title' => 'Form Tambah Barang',
            'jenis' => $jenis,
            'kd' => $Kd,
            'pj' => $Pj,
            'barang' => $barang,
        ];
        // dd($barang);

        return view('insert/add_barang', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $this->barang->insert($data);
        return redirect()->to(site_url('barang'))->with('berhasil', 'Barang Berhasil Ditambahkan.');
    }

    public function edit_barang($id_barang = null)
    {
        $barang = $this->barang->find($id_barang);
        $jenis = $this->jenis->findAll();
        $Kd = $this->Kd->findAll();
        $Pj = $this->pj->findAll();
        if (is_object($barang)) {
            $data = [
                'title' => 'Edit Barang Inventaris',
                'barang' => $barang,
                'jenis' => $jenis,
                'kd' => $Kd,
                'pj' => $Pj,
            ];

            return view('edit/edit_barang', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id_barang = null)
    {
        $data = $this->request->getPost();
        $this->barang->update($id_barang, $data);
        return redirect()->to(site_url('barang'))->with('update', 'Data Berhasil Diupdate');
    }

    function delete($id_barang)
    {
        $dataBarang = $this->barang->find($id_barang);
        if (empty($dataBarang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
        }
        $this->barang->delete($id_barang);
        session()->setFlashdata('delete', 'Data Barang Berhasil Dihapus');
        return redirect()->to(site_url('barang'));
    }

    function kode()
    {
        $this->barang = new BarangModel();
        $data = $this->barang->generateCode();
        return json_encode($data);
        // return json_encode($this->barang->generateCode());
    }

    public function det_barang($id_barang = null)
    {
        $barang = $this->barang->find($id_barang);
        // $session = session();
        // $barang = $this->barang->getDeskripsi($session->get($id_barang));
        $jenis = $this->jenis->findAll();
        $Kd = $this->Kd->findAll();
        $Pj = $this->pj->findAll();
        if (is_object($barang)) {
            $data = [
                'title' => 'Detail Barang',
                'barang' => $barang,
                'jenis' => $jenis,
                'kd' => $Kd,
                'pj' => $Pj,
            ];
            // dd($data);
            return view('detail/det_barang', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function import_barang()
    {
        $data = [
            'title' => 'Import Barang Inventaris'
        ];

        return view('insert/import_barang', $data);
    }

    public function search()
    {
        $keyword = $this->barang->find('keyword');
        $data['barang'] = $this->barang->get_keyword($keyword);
        return view('admin/barang');
    }

    // public function save()
    // {
    //     //validasi input
    //     // if (!$this->validate([
    //     //     'divisi' => 'required|is_unique[divisi.divisi]'
    //     // ])) 

    //     $this->BarangModel->save([
    //         'barang' => $this->request->getVar('barang'),
    //         'merk' => $this->request->getVar('merk'),
    //         'id_jenis' => $this->request->getVar('id_jenis'),
    //         'tperoleh' => $this->request->getVar('tperoleh'),
    //         'masa_guna' => $this->request->getVar('masa_guna'),
    //         'harga' => $this->request->getVar('harga')
    //     ]);

    //     session()->setFlashdata('berhasil', 'Barang berhasil ditambahkan.');

    //     return redirect()->to('/barang/barang');
    // }

    // function delete($id_barang)
    // {
    //     $dataBarang = $this->BarangModel->find($id_barang);
    //     if (empty($dataBarang)) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
    //     }
    //     $this->BarangModel->delete($id_barang);
    //     session()->setFlashdata('delete', 'Data Barang Berhasil Dihapus');
    //     return redirect()->to('/barang');
    // }

    // public function join()
    // {
    //     $model = new BarangModel();
    //     $data['barang'] = $model->getBarang();
    //     echo view('/barang',$data);
    // }
}

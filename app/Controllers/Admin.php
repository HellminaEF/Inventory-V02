<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\KomplainModel;

class Admin extends BaseController
{
    function __construct()
    {
        $this->session = session();
        $this->barang = new BarangModel();
        $this->user = new UserModel();
        $this->komplain = new KomplainModel();
    }

    public function index()
    {
        // $sum = $this->barang->jumlahHarga();
        // $sum = $this->barang->get_sum();
        $barangModel = new BarangModel();
        $result = $barangModel->select('sum(harga) as sumHarga')->first();
        $sum = $result->sumHarga;
        $count = $this->barang->countAllResults();
        $count1 = $this->komplain->countAllResults();
        $data = [
            'title' => 'Dashboard | USSI Inventory',
            'count' => $count,
            'count1' => $count1,
            'sum' => $sum
        ];

        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('/user');
        }

        return view('admin/index', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Dashboard | USSI Inventory'
        ];
        return view('admin/index', $data);
    }

    public function users()
    {
        $user = $this->user->getAll();
        $data = [
            'title' => 'Data Users',
            'user' => $user
        ];
        return view('admin/users', $data);
    }

    function delete($id_user)
    {
        $dataUser = $this->user->find($id_user);
        if (empty($dataUser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user Tidak ditemukan !');
        }
        $this->user->delete($id_user);
        session()->setFlashdata('delete', 'Data user Berhasil Dihapus');
        return redirect()->to(site_url('users'));
    }

    public function edit_user($id_user)
    {
        $data = [
            'title' => 'Edit user',
            'user' => $this->user->DetailData($id_user),
        ];
        return view('edit/edit_user', $data);
    }

    function update($id_user)
    {
        $dataUser = $this->user->find($id_user);
        if (empty($dataUser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user Tidak ditemukan !');
        }
        $this->user->update($id_user, [
            'username' => $this->request->getVar('username'),
            'role' => $this->request->getVar('role')
        ]);
        session()->setFlashdata('update', 'Data user Berhasil Diupdate');
        return redirect()->to(site_url('users'));
    }
}

<?php

namespace App\Controllers;

// use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\KomplainModel;

class User extends BaseController
{
    // protected $helpers = ['custom'];

    function __construct()
    {
        $this->session = session();
        // $this->users = new UserModel();
        $this->barang = new BarangModel();
        $this->komplain = new KomplainModel();
    }

    public function index()
    {
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
        if ($this->session->get('role') != 2) {
            return redirect()->to('/user');
        }

        return view('user/index', $data);
    }

    // public function index()
    // {
    //     return redirect()->to(base_url('login'));
    // }

    // public function login()
    // {
    //     $data = [
    //         'title' => 'Login | USSI Inventory',
    //         'config' => config('Auth'),
    //     ];
    //     return view('auth/login', $data);
    // }

    // public function loginProcess()
    // {
    //     $post = $this->request->getPost();
    //     $query = $this->users->getWhere(['username' => $post['username']]);
    //     $user = $query->getRow();
    //     if ($user) {
    //         if (password_verify($post['password'], $user->password)) {
    //             $params = ['id_user' => $user->id_user];
    //             $this->session()->set($params);

    //             return redirect()->to(site_url('admin'));
    //         } else {
    //             return redirect()->back()->with('error', 'Password tidak sesuai');
    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'Username tidak ditemukan');
    //     }
    // }

    // public function logout()
    // {
    //     $session = session();
    //     $session->destroy();
    //     return redirect()->to('/login');
    // }
}

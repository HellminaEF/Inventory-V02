<?php

namespace App\Controllers;

// use App\Models\UserModel;

class User extends BaseController
{
    // protected $helpers = ['custom'];

    function __construct()
    {
        // $this->users = new UserModel();
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | USSI Inventory'
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
        //cek apakah ada session bernama isLogin
        // if (!$this->session->has('isLogin')) {
        //     return redirect()->to('/auth/login');
        // }

        // return view('user/index');
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

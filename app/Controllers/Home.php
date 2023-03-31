<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Login | USSI Inventory'
    //     ];
    //     return view('auth/login', $data);
    // }

    public function register()
    {
        $data = [
            'title' => 'Register | USSI Inventory'
        ];
        return view('auth/register', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Dashboard | USSI Inventory'
        ];
        return view('admin/index', $data);
    }

    public function transaksi()
    {
        $data = [
            'title' => 'Transaksi Inventaris'
        ];
        return view('admin/transaksi', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}

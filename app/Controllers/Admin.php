<?php

namespace App\Controllers;

class Admin extends BaseController
{
    function __construct()
    {
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
}

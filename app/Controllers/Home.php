<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('auth/login');
    }

    public function admin()
    {
        echo view('admin/index');
    }

    public function jenis()
    {
        echo view('admin/jenis');
    }

    public function divisi()
    {
        echo view('admin/divisi');
    }

    public function karyawan()
    {
        echo view('admin/karyawan');
    }

    public function barang()
    {
        echo view('admin/barang');
    }

    public function transaksi()
    {
        echo view('admin/transaksi');
    }

    public function add_jenis()
    {
        echo view('insert/add_jenis');
    }

    public function add_Karyawan()
    {
        echo view('insert/add_karyawan');
    }

    public function add_divisi()
    {
        echo view('insert/add_divisi');
    }

    public function jabatan()
    {
        echo view('admin/jabatan');
    }
}

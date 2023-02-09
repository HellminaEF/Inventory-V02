<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function admin()
    {
        $data = [
            'title' => 'Dashboard | USSI Inventory'
        ];
        return view('admin/index', $data);
    }

    public function jenis()
    {
        $data = [
            'title' => 'Jenis Barang'
        ];
        return view('admin/jenis', $data);
    }

    public function divisi()
    {
        $data = [
            'title' => 'Divisi'
        ];
        return view('admin/divisi', $data);
    }

    public function karyawan()
    {
        $data = [
            'title' => 'Karyawan'
        ];
        echo view('admin/karyawan', $data);
    }

    public function barang()
    {
        $data = [
            'title' => 'Barang Inventaris'
        ];
        echo view('admin/barang', $data);
    }

    public function transaksi()
    {
        $data = [
            'title' => 'Transaksi Inventaris'
        ];
        echo view('admin/transaksi', $data);
    }

    public function jabatan()
    {
        $data = [
            'title' => 'Jabatan'
        ];
        echo view('admin/jabatan', $data);
    }

    public function add_jenis()
    {
        $data = [
            'title' => 'Tambah Jenis Barang'
        ];
        echo view('insert/add_jenis', $data);
    }

    public function add_Karyawan()
    {
        $data = [
            'title' => 'Tambah Karyawan'
        ];
        echo view('insert/add_karyawan', $data);
    }

    public function add_divisi()
    {
        $data = [
            'title' => 'Tambah Divisi'
        ];
        echo view('insert/add_divisi', $data);
    }

    public function add_jabatan()
    {
        $data = [
            'title' => 'Tambah Jabatan'
        ];
        echo view('insert/add_jabatan', $data);
    }

    public function add_barang()
    {
        $data = [
            'title' => 'Tambah Barang'
        ];
        echo view('insert/add_barang', $data);
    }
}

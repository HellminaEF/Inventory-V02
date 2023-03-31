<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\JenisModel;
use App\Models\KdModel;
use App\Models\TransaksiModel;

class U_barang extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->barang = new BarangModel();
        $this->jenis = new JenisModel();
        $this->Kd = new KdModel();
        $this->transaksi = new TransaksiModel();
    }

    public function u_barang()
    {

        // $data['barang'] = $Barang->paginate(5, 'barang');
        // $data['pager'] = $Barang->pager;
        $transaksi = $this->transaksi->getAll();
        $data = [
            'title' => 'Barang Inventaris',
            'transaksi' => $transaksi,
        ];

        return view('user/barang', $data);
    }
}

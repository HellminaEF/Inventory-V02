<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\JenisModel;

class Comment extends BaseController
{

    protected $helpers = ['custom'];

    function __construct()
    {
        $this->barang = new BarangModel();
        $this->jenis = new JenisModel();
    }

    public function comment()
    {
        $data = [
            'title' => 'Form Keluhan',
        ];

        return view('admin/comment', $data);
    }

    public function u_comment()
    {
        $data = [
            'title' => 'Form Keluhan',
        ];

        return view('user/comment', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\JenisModel;

class Jenis extends BaseController
{
    protected $JenisModel;
    public function __construct()
    {
        $this->JenisModel = new JenisModel();
    }

    public function jenis()
    {

        $Jenis = $this->JenisModel->findAll();

        $data = [
            'title' => 'Jenis',
            'jenis' => $Jenis
        ];


        return view('admin/jenis', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    protected $JabatanModel;
    public function __construct()
    {
        $this->JabatanModel = new JabatanModel();
    }

    public function jabatan()
    {

        $Jabatan = $this->JabatanModel->findAll();

        $data = [
            'title' => 'Jabatan',
            'jabatan' => $Jabatan
        ];


        return view('admin/jabatan', $data);
    }
}

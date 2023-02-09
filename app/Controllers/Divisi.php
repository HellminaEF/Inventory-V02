<?php

namespace App\Controllers;

use App\Models\DivisiModel;

class Divisi extends BaseController
{
    protected $DivisiModel;
    public function __construct()
    {
        $this->DivisiModel = new DivisiModel();
    }

    public function divisi()
    {

        $Divisi = $this->DivisiModel->findAll();

        $data = [
            'title' => 'Divisi',
            'divisi' => $Divisi
        ];


        return view('admin/divisi', $data);
    }
}

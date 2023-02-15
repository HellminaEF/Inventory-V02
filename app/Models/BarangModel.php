<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id_barang';
    protected $allowedFields    = ['barang', 'merk', 'id_jenis', 'tperoleh', 'masa_guna', 'harga'];
}

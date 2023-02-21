<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id_trans';
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['divisi', 'ket'];
}

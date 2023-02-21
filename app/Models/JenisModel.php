<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table            = 'jenis';
    protected $primaryKey       = 'id_jenis';
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields    = ['jenis'];
}

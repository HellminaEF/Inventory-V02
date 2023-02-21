<?php

namespace App\Models;

use CodeIgniter\Model;

class DivisiModel extends Model
{
    protected $table            = 'divisi';
    protected $primaryKey       = 'id_divisi';
    protected $useAutoIncrement = true;
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields    = ['divisi'];
}

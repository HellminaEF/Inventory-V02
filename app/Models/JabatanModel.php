<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table            = 'jabatan';
    protected $primaryKey       = 'id_jabatan';
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields    = ['jabatan'];

    public function DetailData($id_jabatan)
    {
        return $this->db->table('jabatan')
            ->where('id_jabatan', $id_jabatan)
            ->Get()->getRow();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PjModel extends Model
{
    protected $table            = 'penanggung_jawab';
    protected $primaryKey       = 'id_pj';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['penanggung_jawab'];

    public function DetailData($id_pj)
    {
        return $this->db->table('penanggung_jawab')
            ->where('id_pj', $id_pj)
            ->Get()->getRow();
    }
}

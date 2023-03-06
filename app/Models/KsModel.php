<?php

namespace App\Models;

use CodeIgniter\Model;

class KsModel extends Model
{
    protected $table            = 'kondisi_sekarang';
    protected $primaryKey       = 'id_ksekarang';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['kondisi_sekarang'];

    public function DetailData($id_ksekarang)
    {
        return $this->db->table('kondisi_sekarang')
            ->where('id_ksekarang', $id_ksekarang)
            ->Get()->getRow();
    }
}

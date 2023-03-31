<?php

namespace App\Models;

use CodeIgniter\Model;

class KdModel extends Model
{
    protected $table            = 'kondisi_dibeli';
    protected $primaryKey       = 'id_kdibeli';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['kondisi_dibeli'];

    public function DetailData($id_kdibeli)
    {
        return $this->db->table('kondisi_dibeli')
            ->where('id_kdibeli', $id_kdibeli)
            ->Get()->getRow();
    }

    function getJenis($id_kdibeli)
    {
        $komp = $this->db->table('kondisi_dibeli');
        $komp->join('barang', 'barang.id_kdibeli = kondisi_dibeli.id_kdibeli');
        $query = $komp->get();
        return $query->getResult();
    }
}

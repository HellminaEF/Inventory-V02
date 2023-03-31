<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table            = 'jenis';
    protected $primaryKey       = 'id_jenis';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['kode_jenis', 'jenis'];

    public function DetailData($id_jenis)
    {
        return $this->db->table('jenis')
            ->where('id_jenis', $id_jenis)
            ->Get()->getRow();
    }

    function getJenis($id_jenis)
    {
        $komp = $this->db->table('jenis');
        $komp->join('barang', 'barang.id_jenis = jenis.id_jenis');
        $query = $komp->get();
        return $query->getResult();
    }
}

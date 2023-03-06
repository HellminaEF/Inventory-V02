<?php

namespace App\Models;

use CodeIgniter\Model;

class KodetransModel extends Model
{
    protected $table            = 'kode_transaksi';
    protected $primaryKey       = 'id_ktrans';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['kode_trans', 'jenis_trans'];

    public function DetailData($id_ktrans)
    {
        return $this->db->table('kode_transaksi')
            ->where('id_ktrans', $id_ktrans)
            ->Get()->getRow();
    }
}

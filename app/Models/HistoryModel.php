<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
    protected $table            = 'history';
    protected $primaryKey       = 'id_history';
    protected $useAutoIncrement = true;
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['t_history', 'id_barang', 'id_karyawan', 'keterangan'];

    function getAll()
    {
        $builder = $this->db->table('history');
        $builder->join('barang', 'barang.id_barang = history.id_barang');
        $builder->join('karyawan', 'karyawan.id_karyawan = history.id_karyawan');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DetailData($id_comment)
    {
        return $this->db->table('divisi')
            ->where('id_comment', $id_comment)
            ->Get()->getRow();
    }
}

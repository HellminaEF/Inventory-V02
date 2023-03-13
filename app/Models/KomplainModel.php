<?php

namespace App\Models;

use CodeIgniter\Model;

class KomplainModel extends Model
{
    protected $table            = 'komplain';
    protected $primaryKey       = 'id_komplain';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tanggal', 'id_karyawan', 'id_barang', 'id_ksekarang', 'keterangan'];

    function getAll()
    {
        $builder = $this->db->table('komplain');
        $builder->join('karyawan', 'karyawan.id_karyawan = komplain.id_karyawan');
        $builder->join('barang', 'barang.id_barang = komplain.id_barang');
        $builder->join('kondisi_sekarang', 'kondisi_sekarang.id_ksekarang = komplain.id_ksekarang');
        $query = $builder->get();
        return $query->getResult();
    }
}

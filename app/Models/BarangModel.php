<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id_barang';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['barang', 'merk', 'id_jenis', 'tperoleh', 'masa_guna', 'harga'];

    function getAll(){
        $builder = $this->db->table('barang');
        $builder->join('jenis', 'jenis.id_jenis = barang.id_jenis');
        $query = $builder->get();
        return $query->getResult();
    }

}

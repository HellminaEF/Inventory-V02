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

    function getAll()
    {
        $builder = $this->db->table('barang');
        $builder->join('jenis', 'jenis.id_jenis = barang.id_jenis');
        $query = $builder->get();
        return $query->getResult();
    }

    // public function CreateCode()
    // {
    //     $this->db->select('RIGHT(tbl_barang.kode_barang,5) as kode_barang', FALSE);
    //     $this->db->order_by('kode_barang', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('tbl_barang');
    //     if ($query->num_rows() <> 0) {
    //         $data = $query->row();
    //         $kode = intval($data->kode_barang) + 1;
    //     } else {
    //         $kode = 1;
    //     }
    //     $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
    //     $kodetampil = "BR" . $batas;
    //     return $kodetampil;
    // }
}

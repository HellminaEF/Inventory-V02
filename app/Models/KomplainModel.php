<?php

namespace App\Models;

use CodeIgniter\Model;

class KomplainModel extends Model
{
    protected $table            = 'komplain';
    protected $primaryKey       = 'id_komplain';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['t_komplain', 'id_trans', 'approve', 'keterangan'];

    // function getAll()
    // {
    //     $builder = $this->db->table('komplain');
    //     $builder->join('karyawan', 'karyawan.id_karyawan = komplain.id_karyawan');
    //     $builder->join('barang', 'barang.id_barang = komplain.id_barang');
    //     $builder->join('kondisi_sekarang', 'kondisi_sekarang.id_ksekarang = komplain.id_ksekarang');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    function getAll($id_komplain)
    {
        $builder = $this->db->table('komplain');
        $builder->join('transaksi', 'transaksi.id_trans = komplain.id_trans');
        $builder->join('barang', 'transaksi.id_barang = komplain.id_barang');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DetailData($id_komplain)
    {
        return $this->db->table('komplain')
            ->where('id_komplain', $id_komplain)
            ->Get()->getRow();
    }

    function getKomplainUser($id_karyawan)
    {
        $komp = $this->db->table('transaksi');
        $komp->join('komplain', 'komplain.id_trans = transaksi.id_trans');
        $komp->join('barang', 'transaksi.id_barang = barang.id_barang');
        $query = $komp->get();
        return $query->getResult();
    }

    function getDeskripsi($id_karyawan)
    {
        $komp = $this->db->table('transaksi');
        $komp->join('komplain', 'komplain.id_trans = transaksi.id_trans');
        $komp->join('barang', 'transaksi.id_barang = barang.id_barang');
        $query = $komp->get();
        return $query->getResult();
    }
}

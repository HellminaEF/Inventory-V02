<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id_trans';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_ktrans', 't_trans', 'id_barang', 'barang', 'id_karyawan', 'karyawan', 'ket'];

    function getAll()
    {
        $builder = $this->db->table('transaksi');
        $builder->join('barang', 'barang.id_barang = transaksi.id_barang');
        $builder->join('karyawan', 'karyawan.id_karyawan = transaksi.id_karyawan');
        $builder->join('kode_transaksi', 'kode_transaksi.id_ktrans = transaksi.id_ktrans');
        $query = $builder->get();
        return $query->getResult();
    }

    function getSearch($keyword = null)
    {
        $builder = $this->db->table('transaksi');
        $builder->join('barang', 'barang.id_barang = transaksi.id_barang');
        $builder->join('karyawan', 'karyawan.id_karyawan = transaksi.id_karyawan');
        $builder->join('kode_transaksi', 'kode_transaksi.id_ktrans = transaksi.id_ktrans');
        if ($keyword != '') {
            $builder->like('barang', $keyword);
            $builder->orLike('t_trans', $keyword);
            $builder->orLike('karyawan', $keyword);
            $builder->orLike('kode_trans', $keyword);
        }
        $query = $builder->get();
        return $query->getResult();
    }

    function getTransaksiUser($id_karyawan)
    {
        $trans = $this->db->table('transaksi');
        $trans->join('barang', 'transaksi.id_barang = barang.id_barang');
        $trans->where('transaksi.id_karyawan =' . $id_karyawan);
        $query = $trans->get();
        return $query->getResult();
    }

    // public function data()
    // {
    //     $builder = $this->db->table('transaksi');
    //     $builder->like('id_karyawan', 'Nanda');
    //     $builder->orLike('id_barang', 'Laptop');
    //     $query = $builder->get();
    //     return $query;
    // }
}

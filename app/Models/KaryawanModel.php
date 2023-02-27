<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['karyawan', 'id_divisi', 'id_jabatan', 'status', 'ket'];

    function getAll()
    {
        $builder = $this->db->table('karyawan');
        $builder->join('divisi', 'divisi.id_divisi = karyawan.id_divisi');
        $builder->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan');
        $query = $builder->get();
        return $query->getResult();
    }

    // public function buat_kode()
    // {
    //     $this->db->select('RIGHT(karyawan.id_karyawan,4) as kode', FALSE);
    //     $this->db->order_by('kode', 'DESC');
    //     $this->db->limit(1);

    //     $query = $this->db->get('karyawan');

    //     if ($query->num_rows() <> 0) {
    //         $data = $query->row();
    //         $kode = intval($data->kode) + 1;
    //     } else {
    //         $kode = 1;
    //     }
    //     $kode_max = str_pad($kode, 4, "0", STR_PAD_LEFT);
    //     $kode_jadi = "KAR" . $kode_max;
    //     return $kode_jadi;
    // }
}

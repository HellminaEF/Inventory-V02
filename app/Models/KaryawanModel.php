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

    function getAll(){
        $builder = $this->db->table('karyawan');
        $builder->join('divisi', 'divisi.id_divisi = karyawan.id_divisi');
        $builder->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan');
        $query = $builder->get();
        return $query->getResult();
    }
}

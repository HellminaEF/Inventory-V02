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
    protected $allowedFields    = ['kode_karyawan', 'karyawan', 'id_divisi', 'id_jabatan', 'id_status', 'ket'];

    function getAll()
    {
        $builder = $this->db->table('karyawan');
        $builder->join('divisi', 'divisi.id_divisi = karyawan.id_divisi');
        $builder->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan');
        $builder->join('status', 'status.id_status = karyawan.id_status');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DetailData($id_karyawan)
    {
        $builder = $this->db->table('karyawan');
        $builder->join('divisi', 'divisi.id_divisi = karyawan.id_divisi');
        $builder->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan');
        $builder->join('status', 'status.id_status = karyawan.id_status');
        $query = $builder->get();
        return $query->getResult();

        return $this->db->table('karyawan')
            ->where('id_karyawan', $id_karyawan)
            ->Get()->getRow();
    }

    /** Fungsi UPDATE */

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
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

<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $allowedFields = ["id_karyawan", "username", "password", "salt", "role"];
    protected $useTimestamps = false;

    function getAll()
    {
        $builder = $this->db->table('user');
        $builder->join('karyawan', 'karyawan.id_karyawan = user.id_karyawan');
        $query = $builder->get();
        return $query->getResult();
    }

    public function DetailData($id_user)
    {
        return $this->db->table('user')
            ->where('id_user', $id_user)
            ->Get()->getRow();
    }
}

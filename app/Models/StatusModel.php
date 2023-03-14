<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table            = 'status';
    protected $primaryKey       = 'id_status';
    protected $useAutoIncrement = true;
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['status'];

    public function DetailData($id_status)
    {
        return $this->db->table('status')
            ->where('id_status', $id_status)
            ->Get()->getRow();
    }
}

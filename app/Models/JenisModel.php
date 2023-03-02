<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table            = 'jenis';
    protected $primaryKey       = 'id_jenis';
    protected $returnType       = "object";
    protected $useTimestamps    = true;
    protected $allowedFields    = ['jenis'];

    public function DetailData($id_jenis)
    {
        return $this->db->table('jenis')
            ->where('id_jenis', $id_jenis)
            ->Get()->getRow();
    }

    // function generateCode()
    // {
    //     $builder = $this->table('jenis');
    //     $builder->selectMax('id_barang', 'id_jenis');
    //     $query = $builder->get();

    //     if ($query->getNumRows() > 0) {
    //         foreach ($query->getResult() as $key) {
    //             $id = '';
    //             $ambildata = substr($key->id_jenis, -4);
    //             $increment = intval($ambildata) + 1;
    //             $id = sprintf('%04s', $increment);
    //         }
    //     } else {
    //         $id = '0001';
    //     }

    //     return 'J-' . $id;
    // }
}

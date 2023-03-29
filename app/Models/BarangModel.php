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
    protected $allowedFields    = ['id_pj', 'kode_barang', 'barang', 'merk', 'id_jenis', 'id_kdibeli', 'tperoleh', 'masa_guna', 'harga'];

    function getAll()
    {
        $builder = $this->db->table('barang');
        $builder->join('jenis', 'jenis.id_jenis = barang.id_jenis');
        $builder->join('kondisi_dibeli', 'kondisi_dibeli.id_kdibeli = barang.id_kdibeli');
        $builder->join('penanggung_jawab', 'penanggung_jawab.id_pj = barang.id_pj');
        $query = $builder->get();
        return $query->getResult();
    }

    public function barangjoin($id_barang)
    {
        $builder = $this->db->table('barang');
        // $this->db->from('barang');
        $builder->join('jenis', 'jenis.id_jenis = barang.id_jenis', 'left');
        $builder->join('kondisi_dibeli', 'kondisi_dibeli.id_kdibeli = barang.id_kdibeli', 'left');
        $builder->join('penanggung_jawab', 'penanggung_jawab.id_pj = barang.id_pj', 'left');
        $builder->where('jenis.id_jenis', 'kondisi_dibeli.id_kdibeli', 'penanggung_jawab.id_pj', $id_barang);
        $query = $builder->get();
        return $query->getResult();
    }

    function getDeskripsi($id_barang)
    {
        $des = $this->db->table('barang');
        $des->join('jenis', 'jenis.id_jenis = barang.id_jenis');
        $des->join('kondisi_dibeli', 'kondisi_dibeli.id_kdibeli = barang.id_kdibeli');
        $des->join('penanggung_jawab', 'penanggung_jawab.id_pj = barang.id_pj');
        $query = $des->get();
        return $query->getResult();
    }

    function getSearch($keyword = null)
    {
        $builder = $this->db->table('barang');
        $builder->join('jenis', 'jenis.id_jenis = barang.id_jenis');
        $builder->join('kondisi_dibeli', 'kondisi_dibeli.id_kdibeli = barang.id_kdibeli');
        $builder->join('penanggung_jawab', 'penanggung_jawab.id_pj = barang.id_pj');
        if ($keyword != '') {
            $builder->like('barang', $keyword);
            $builder->orLike('merk', $keyword);
            $builder->orLike('jenis', $keyword);
            $builder->orLike('masa_guna', $keyword);
        }
        $query = $builder->get();
        return $query->getResult();
    }

    function autoCode()
    {
        $builder = $this->db->table('barang');
        $builder->selectMax('kode_barang', 'kode_barangMax');
        $query = $builder->get()->getResult();
        $kd = '';
        if ($query > 0) {
            //001/INV/2023
            foreach ($query as $key) {
                if (substr($key->kode_barangMax, 8)) {
                    $ambilKode = (int)substr($key->kode_barangMax, 3);
                    $counter = (intval($ambilKode)) + 1;
                    $kd = sprintf('%03s', $counter);
                } else {
                    $kd = '001';
                }
            }
        } else {
            $kd = '001';
        }
        $tanggal = date("Y");
        return $kd . '/' . 'INV' . '/' . $tanggal;
    }

    // function autoCode()
    // {
    //     $cd = $this->table("SELECT MAX(RIGHT(kode_barang,3)) AS kode_barangMax FROM barang");
    //     $kd = "";
    //     if ($cd->num_rows() > 0) {
    //         foreach ($cd->result() as $k) {
    //             $tmp = ((int)$k->kd_max) + 1;
    //             $kd = sprintf("%03s", $tmp);
    //         }
    //     } else {
    //         $kd = "001";
    //     }
    //     date_default_timezone_set('Asia/Jakarta');
    //     return date('Y') . "-" . $kd;
    // }

    // public function getPemasukanPerRange()
    // {
    //     $this->db = db_connect();
    //     $mulai_tanggal  = @$_POST['mulai_tanggal'];
    //     $sampai_tanggal = @$_POST['sampai_tanggal'];

    //     $mulai_tanggal  = str_replace('/', '-', $mulai_tanggal);
    //     $sampai_tanggal = str_replace('/', '-', $sampai_tanggal);

    //     $mulai_tanggal  = date('Y-m-d', strtotime($mulai_tanggal));
    //     $sampai_tanggal = date('Y-m-d', strtotime($sampai_tanggal));

    //     $sql        = "SELECT * 
    //                 FROM pemasukan 
    //                 WHERE tperoleh BETWEEN '" . $mulai_tanggal . "' AND '" . $sampai_tanggal . "'
    //                 ORDER BY tperoleh ASC
    //                 ";
    //     $query      = $this->db->query($sql);
    //     $results    = $query->getResultArray();

    //     return $results;
    // }

    // public function getPagination(int $barang)
    // {
    //     return $this->select()->join('penanggung_jawab', 'penanggung_jawab.id_pj = barang.id_pj')->paginate($barang);
    // }

    // public function DetailData($id_barang)
    // {
    //     return $this->db->table('barang')
    //         ->where('id_barang', $id_barang)
    //         ->Get()->getRow();
    // }

    // function get_no_barang()
    // {
    //     $q = $this->db->query("SELECT MAX(RIGHT(id_barang,3)) AS kd_max FROM barang WHERE DATE(tanggal)=CURDATE()");
    //     $kd = "";
    //     if ($q->num_rows() > 0) {
    //         foreach ($q->result() as $k) {
    //             $tmp = ((int)$k->kd_max) + 1;
    //             $kd = sprintf("%03s", $tmp);
    //         }
    //     } else {
    //         $kd = "001";
    //     }
    //     date_default_timezone_set('Asia/Jakarta');
    //     return date('dmy') . $kd;
    // }

    // function simpan_barang($id_barang)
    // {
    //     $hasil = $this->db->query("INSERT INTO barang (id_barang) VALUES ('$id_barang')");
    //     return $hasil;
    // }

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

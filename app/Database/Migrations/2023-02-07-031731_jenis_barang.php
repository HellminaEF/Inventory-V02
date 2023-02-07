<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class jenis_barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'ket' => [
                'type'           => 'TEXT',
                'null'           => 'true',
            ],
        ]);
        $this->forge->addKey('id_jenis', TRUE);
        $this->forge->createTable('jenis', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jenis_barang');
    }
}

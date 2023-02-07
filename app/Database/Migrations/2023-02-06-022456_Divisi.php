<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class divisi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_divisi'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'divisi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'ket' => [
                'type'           => 'TEXT',
                'null'           => 'true',
            ],
        ]);
        $this->forge->addKey('id_divisi', TRUE);
        $this->forge->createTable('divisi', TRUE);
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('divisi');
    }
}

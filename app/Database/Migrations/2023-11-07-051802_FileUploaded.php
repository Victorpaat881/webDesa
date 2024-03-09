<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FileUploaded extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'file_location' => ['type' => 'VARCHAR', 'constraint' => 50],
            'name' => ['type' => 'VARCHAR', 'constraint' => 50],
            'extension' => ['type' => 'VARCHAR', 'constraint' => 50],
            'size' => ['type' => 'INT', 'constraint' => 10],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('file_uploaded');
    }

    public function down()
    {
        $this->forge->dropTable('file_uploaded');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostTag extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'tag_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);
        $this->forge->addKey(['post_id', 'tag_id'], true);
        $this->forge->addForeignKey('post_id', 'posts', 'post_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tag_id', 'tags', 'tag_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('post_tag');
    }

    public function down()
    {
        $this->forge->dropTable('post_tag');
    }
}

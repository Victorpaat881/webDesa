<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Chatbot extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'keyword' => ['type' => 'TEXT'],
            'answer' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey(['post_id', 'tag_id'], true);
        $this->forge->addForeignKey('post_id', 'posts', 'post_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tag_id', 'tags', 'tag_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('chatbot');
    }

    public function down()
    {
        $this->forge->dropTable('chatbot');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'category_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);
        $this->forge->addKey(['post_id', 'category_id'], true);
        $this->forge->addForeignKey('post_id', 'posts', 'post_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('category_id', 'categories', 'category_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('post_category');
    }

    public function down()
    {
        $this->forge->dropTable('post_category');
    }
}

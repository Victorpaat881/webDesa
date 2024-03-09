<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $comments = array(
            array('comment_id' => '1', 'user_id' => '4', 'username' => 'Kades', 'post_id' => '14', 'content' => 'Hello There', 'created_at' => '2023-11-17 00:00:00'),
            array('comment_id' => '2', 'user_id' => '4', 'username' => 'Kades', 'post_id' => '14', 'content' => 'Ini Komentar Kedua', 'created_at' => '2023-11-17 00:00:00'),
            array('comment_id' => '3', 'user_id' => '4', 'username' => 'Kades', 'post_id' => '14', 'content' => 'Hello There, Ini Kepala Desa', 'created_at' => '2023-11-17 00:00:00')
        );
        $this->db->table('comments')->insertBatch($comments);
    }
}

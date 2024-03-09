<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostTagSeeder extends Seeder
{
    public function run()
    {
        $post_tag = array(
            array('post_id' => '14', 'tag_id' => '6'),
            array('post_id' => '15', 'tag_id' => '4'),
            array('post_id' => '16', 'tag_id' => '4'),
            array('post_id' => '16', 'tag_id' => '5')
        );
        $this->db->table('post_tag')->insertBatch($post_tag);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    public function run()
    {
        $post_category = array(
            array('post_id' => '14', 'category_id' => '5'),
            array('post_id' => '15', 'category_id' => '5'),
            array('post_id' => '16', 'category_id' => '5')
        );
        $this->db->table('post_category')->insertBatch($post_category);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = array(
            array('category_id' => '5', 'name' => 'Default')
        );
        $this->db->table('categories')->insertBatch($categories);
    }
}

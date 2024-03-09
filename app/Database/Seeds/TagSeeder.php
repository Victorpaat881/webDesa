<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = array(
            array('tag_id' => '4', 'name' => 'Info Desa'),
            array('tag_id' => '5', 'name' => 'Acara Desa'),
            array('tag_id' => '6', 'name' => 'Upacara')
        );
        $this->db->table('tags')->insertBatch($tags);
    }
}

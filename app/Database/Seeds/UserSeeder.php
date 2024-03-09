<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = array(
            array('id' => '4', 'email' => 'superuser@administrator.com', 'username' => 'superuser', 'password_hash' => '$2y$10$izlbXXKz2LMgkR1FnsouSekVdbiOFeXOG2JfRcDzmajMV3qfjReH2', 'reset_hash' => NULL, 'reset_at' => NULL, 'reset_expires' => NULL, 'activate_hash' => NULL, 'status' => NULL, 'status_message' => NULL, 'active' => '1', 'force_pass_reset' => '0', 'created_at' => '2023-11-08 17:04:18', 'updated_at' => '2023-11-08 17:04:18', 'deleted_at' => NULL)
        );
        $this->db->table('users')->insertBatch($users);
    }
}

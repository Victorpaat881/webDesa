<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Throwable;

class Migrate extends Controller
{
    public function index(): string
    {
        $migrate = \Config\Services::migrations();

        try {
            $migrate->setNamespace('Myth\Auth')->latest();
            $migrate->setNamespace('App')->latest();
        } catch (Throwable $e) {
            // Do something with the error here...
            exit($e->getMessage());
            echo 'There are some error in migrate';
        }
        $this->seeder();
        return 'table migrated and seeded succesfully';
    }

    public function seeder(): void
    {
        $seeder = \Config\Database::seeder();
        $seeder->call('userSeeder');
        $seeder->call('tagSeeder');
        $seeder->call('categorySeeder');
        $seeder->call('postSeeder');
        $seeder->call('postCategorySeeder');
        $seeder->call('postTagSeeder');
    }
}

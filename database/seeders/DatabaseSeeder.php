<?php

namespace Database\Seeders;


use Database\Seeders\KegiatansTableSeeder;

use Illuminate\Database\Seeder;
use Database\Seeders\CategoryKegiatansTableSeeder;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoryKegiatansTableSeeder::class,
            KegiatansTableSeeder::class,
        ]);

    }
}

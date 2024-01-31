<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Kegiatan;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class KegiatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 kegiatan records
        foreach (range(1, 20) as $index) {
            Kegiatan::create([
                'category_kegiatan_id' => rand(1, 6), // Adjust the range based on your category_kegiatan records
                'user_id' => '1', // Adjust the range based on your user records
                'slug' => 'kegiatan-' . $index, // You can customize the slug generation logic
                'judul' => 'Judul Kegiatan ' . $index,
                'deskripsi' => 'Deskripsi Kegiatan ' . $index,
                'gambar' => 'post-01.jpg', // Adjust the path based on your requirements
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

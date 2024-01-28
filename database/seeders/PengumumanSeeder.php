<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Loop to generate 50 entries
        for ($i = 1; $i <= 50; $i++) {
            $data = [
                'user_id' => '1', // Assuming user IDs range from 1 to 10, adjust as needed
                'slug' => Str::slug("Sample Pengumuman $i"),
                'judul' => "Sample Pengumuman $i",
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'gambar' => "storage/images/post-01.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Insert data into the database
            DB::table('pengumumen')->insert($data);
        }
    }
}

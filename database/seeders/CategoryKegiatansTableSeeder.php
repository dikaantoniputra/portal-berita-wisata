<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\CategoryKegiatan;

class CategoryKegiatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // Create 5 fake category_kegiatan records with user_id = 1
    foreach (range(1, 6) as $index) {
        CategoryKegiatan::create([
            'user_id' => 1, // Fixed user_id
            'name' => 'Category ' . $index, // Customize category name as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

}



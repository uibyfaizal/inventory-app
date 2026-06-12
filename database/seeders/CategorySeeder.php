<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Elektronik',
            'Makanan',
            'Minuman',
            'Bahan',
            'Lainnya'
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate([
                'name' => $category
            ]);
        }
    }
}

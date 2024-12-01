<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Crear 10 categorías de ejemplo
        Category::factory()->count(10)->create();
    }
}

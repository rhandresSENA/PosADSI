<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'NAME' => $this->faker->word,
            'DESCRIPTION' => $this->faker->sentence,
        ];
    }
}

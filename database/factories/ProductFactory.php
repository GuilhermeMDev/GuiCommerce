<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        $name = $this->faker->word; //macete*
        return [
            'name' => $name,
            'slug' => Str::slug($name), //facilita as engenharias de busca do google por exemplo, com separador (por-exemplo-assim)
//            'cover' => $this->faker->imageUrl('products',360,360),
            'price' => $this->faker->randomFloat(1, 20, 30),
            'description' => $this->faker->sentence,
            'stock' => $this->faker->randomDigit(),
        ];
    }
}

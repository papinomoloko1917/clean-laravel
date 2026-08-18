<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productName = [
            'Cube Reaction Pro 29',
            'HORNET',
            'STRIKE',
            'TORNADO',
            'STELS',
            'BLIZZARD',
            'MAGIC',
            'DUNE',
            'Haro Double Peak Sport',
            'Superior XC 879',
            'HORH BULLET 9.3 HD 29'
        ];

        $imageProducts = [
            'products/CubeReactionPro29.jpg',
            'products/HaroDoublePeakSport.jpg',
            'products/HORHBULLET9.3HD29.webp',
            'products/HORHFOREST7.0FMD27,5.jpg',
            'products/HORN_BULLET.jpg',
            'products/HORN_ROHAN.jpg',
            'products/SITIS_RADE.jpg',
            'products/SuperiorXC879.jpg'
        ];
        return [
            'title' => fake()->randomElement($productName),
            'description' => fake()->sentence(6),
            'img' => asset('storage/' . fake()->randomElement($imageProducts)),
            'price' => fake()->numberBetween(100, 1000),
            'quantity' => fake()->numberBetween(1, 50)

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        $nameProducts = [
            'Трековый велосипед',
            'Детский велосипед',
            'BMX',
            'Горный велосипед',
            'Парковый велосипед',
            'Городской велосипед',
        ];
        $typeProducts = [
            'Стелс',
            'Десна',
            'Спорт',
            'Динамо',
            'Фаворит',
            'MERIDA',
            'CUBE',
            'CORTO'
        ];
        return [
            'title' => fake()->randomElement($nameProducts) . ' ' . '"' .  fake()->randomElement($typeProducts) . '"',
            'description' => fake()->sentence(6),
            'price' => fake()->numberBetween(100, 1000),
            'quantity' => fake()->numberBetween(0, 50),
            'is_active' => fake()->boolean(30)
        ];
    }
}

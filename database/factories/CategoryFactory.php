<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Categories::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Ice Cream', 'Coffee', 'Tea', 'Milk', 'Juice']),
            'description' => $this->faker->text,
        ];
    }
}

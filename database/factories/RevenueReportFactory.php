<?php

namespace Database\Factories;
use App\Models\Product;
use App\Models\RevenueReport;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RevenueReport>
 */
class RevenueReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RevenueReport::class;

    public function definition(): array
    {
        return [
            'report_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'total_sales' => $this->faker->randomFloat(2, 1000, 10000),
            'best_selling_product_id' => Product::inRandomOrder()->first()->id,
            'total_orders' => $this->faker->numberBetween(50, 200),
        ];
    }
}

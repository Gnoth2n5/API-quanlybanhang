<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Ice Cream', 'description' => 'Frozen dessert'],
            ['name' => 'Coffee', 'description' => 'Hot drink'],
            ['name' => 'Tea', 'description' => 'Hot drink'],
            ['name' => 'Milk', 'description' => 'Cold drink'],
            ['name' => 'Juice', 'description' => 'Cold drink'],
        ];

        foreach ($categories as $category) {
            \App\Models\Categories::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\ItemCategory; // Make sure this matches your model name

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Office Supplies',
            'Furniture',
            'Cleaning Products',
            'Tools & Equipment',
            'Raw Materials',
            'Packaging',
            'Safety Gear',
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}

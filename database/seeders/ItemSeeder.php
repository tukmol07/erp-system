<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        // Optional: ensure there are categories and suppliers
        $category = Category::first() ?? Category::factory()->create();
        $supplier = Supplier::first() ?? Supplier::factory()->create();

        $items = [
            [
                'serial_number' => 'SN1001',
                'name' => 'Industrial Drill',
                'sku' => 'SKU-DRL-001',
                'description' => 'Heavy-duty drill for construction use.',
                'category_id' => $category->id,
                'quantity' => 50,
                'min_stock' => 10,
                'supplier_id' => $supplier->id,
                'last_purchase_date' => now()->subDays(15),
            ],
            [
                'serial_number' => 'SN1002',
                'name' => 'Office Chair',
                'sku' => 'SKU-OFC-002',
                'description' => 'Ergonomic office chair with lumbar support.',
                'category_id' => $category->id,
                'quantity' => 20,
                'min_stock' => 5,
                'supplier_id' => $supplier->id,
                'last_purchase_date' => now()->subDays(30),
            ],
            [
                'serial_number' => 'SN1003',
                'name' => 'A4 Paper (500 sheets)',
                'sku' => 'SKU-PPR-003',
                'description' => 'Ream of A4 size multipurpose paper.',
                'category_id' => $category->id,
                'quantity' => 100,
                'min_stock' => 25,
                'supplier_id' => $supplier->id,
                'last_purchase_date' => now()->subDays(7),
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}

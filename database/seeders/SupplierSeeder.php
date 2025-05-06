<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier; // Ensure the model exists

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            [
                'company_name' => 'Global Supplies Inc.',
                'contact_person' => 'Maria Gomez',
                'email' => 'maria@globalsupplies.com',
                'contact_number' => '123-456-7890',
                'address' => '123 Industrial Rd, Manila',
            ],
            [
                'company_name' => 'Tech Warehouse Ltd.',
                'contact_person' => 'Liam Tan',
                'email' => 'liam@techwarehouse.com',
                'contact_number' => '098-765-4321',
                'address' => '456 Tech Park, Cebu',
            ],
            [
                'company_name' => 'Office Essentials PH',
                'contact_person' => 'Anna Reyes',
                'email' => 'anna@officeph.com',
                'contact_number' => '0917-123-4567',
                'address' => '789 Main St, Davao',
            ],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}

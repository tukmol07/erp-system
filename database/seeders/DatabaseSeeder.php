<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kenley',
            'email' => 'kenley@example.com',
            'password' => '12345',
            'role' => 'Admin',
        ]);

        User::factory()->create([
            'name' => 'Micko',
            'email' => 'micko@gmail.com',
            'password' => '12345',
            'role' => 'HR',
        ]);

        User::factory()->create([
            'name' => 'Frinze',
            'email' => 'Frinze@gmail.com',
            'password' => '12345',
            'role' => 'Inventory',
        ]);

        $this->call([
            EmploymentRecordSeeder::class,
            PayrollSeeder::class,
            CategorySeeder::class,
            SupplierSeeder::class,
            ItemSeeder::class,




        ]);
    }
}

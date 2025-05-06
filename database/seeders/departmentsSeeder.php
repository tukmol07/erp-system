<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class departmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Admin',
            'HR',
            'Inventory',
            'Planning',
            'CRM',
            'Production',
            'Marketing',
            'Reporting',
            'Accounting',
        ];

        foreach ($departments as $department) {
            Departments::create(['name' => $department]);
        }
    }
}

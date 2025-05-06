<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmploymentRecord;

class EmploymentRecordSeeder extends Seeder
{
    public function run(): void
    {
        EmploymentRecord::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Payroll;
use App\Models\EmploymentRecord;
use Illuminate\Database\Seeder;

class PayrollSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure there are employees to associate payrolls with
        if (EmploymentRecord::count() === 0) {
            EmploymentRecord::factory()->count(10)->create();
        }

        $employees = EmploymentRecord::all();

        foreach ($employees as $employee) {
            Payroll::factory()->count(2)->create([
                'employee_id' => $employee->id,
                'month' => fake()->monthName,
            ]);
        }
    }
}

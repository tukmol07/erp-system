<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PayrollFactory extends Factory
{
    public function definition(): array
    {
        $basic = $this->faker->randomFloat(2, 2000, 4000);
        $allowances = $this->faker->randomFloat(2, 100, 500);
        $deductions = $this->faker->randomFloat(2, 50, 300);
        $overtime_hours = $this->faker->numberBetween(0, 20);
        $overtime_rate = $this->faker->randomFloat(2, 10, 25);
        $bonus = $this->faker->randomFloat(2, 0, 500);
        $overtime_pay = $overtime_hours * $overtime_rate;
        $net_salary = $basic + $allowances + $overtime_pay + $bonus - $deductions;

        return [
            'basic_salary' => $basic,
            'allowances' => $allowances,
            'deductions' => $deductions,
            'overtime_hours' => $overtime_hours,
            'overtime_rate' => $overtime_rate,
            'overtime_pay' => $overtime_pay,
            'bonus' => $bonus,
            'net_salary' => $net_salary,
            'remarks' => $this->faker->optional()->sentence,
        ];
    }
}

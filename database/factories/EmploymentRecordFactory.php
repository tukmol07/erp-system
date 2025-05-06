<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmploymentRecordFactory extends Factory
{
    public function definition(): array
    {
        return [
            'employee_name' => $this->faker->name,
            'employee_number' => 'EMP' . $this->faker->unique()->numerify('###'),
            'visa_number' => 'VISA' . $this->faker->numerify('######'),
            'category_resident' => $this->faker->randomElement(['Resident', 'Non-Resident']),
            'nationality' => $this->faker->country,
            'date_arrival' => $this->faker->date(),
            'date_hired' => $this->faker->date(),
            'kiwa_contract_number' => 'KIWA' . $this->faker->numerify('#####'),
            'salary' => $this->faker->randomFloat(2, 2000, 6000),
            'educational_background' => $this->faker->sentence(3),
            'skills' => implode(', ', $this->faker->words(3)),
            'ticket_provided' => $this->faker->boolean,
            'residence_renewal' => $this->faker->randomElement([2, 4, 6, 8, 10]),
            'contract_expiry_date' => $this->faker->dateTimeBetween('+6 months', '+5 years')->format('Y-m-d'),
        ];
    }
}

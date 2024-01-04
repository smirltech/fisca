<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CNSSData>
 */
class CNSSDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_security_number' => $this->faker->randomNumber(8),
            'employee_id' => $this->faker->randomNumber(8),
            'type_of_worker' => $this->faker->randomElement([0,1]),
            'contributed_amount' => $this->faker->randomFloat(2, 0, 999999),
            'number_of_workdays' => $this->faker->randomNumber(2),
            'number_of_work_hours' => $this->faker->randomNumber(2),
            'gross_taxable_amount' => $this->faker->randomFloat(2, 0, 999999),
            'contributed_period' => $this->faker->date(),

        ];
    }
}

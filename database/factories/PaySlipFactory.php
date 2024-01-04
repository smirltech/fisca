<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaySlip>
 */
class PaySlipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => $this->faker->randomNumber(8),
            'cost_of_living_allowance' => $this->faker->randomFloat(2, 0, 999999),
            'bonus' => $this->faker->randomFloat(2, 0, 999999),
            'gratuity' => $this->faker->randomFloat(2, 0, 999999),
            'leave_allowance' => $this->faker->randomFloat(2, 0, 999999),
            'commission' => $this->faker->randomFloat(2, 0, 999999),
            'other_allowances' => $this->faker->randomFloat(2, 0, 999999),
            'fringe_benefit' => $this->faker->randomFloat(2, 0, 999999),
        ];
    }
}

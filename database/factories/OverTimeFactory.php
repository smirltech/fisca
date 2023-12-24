<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\OverTime;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OverTimeFactory extends Factory
{
    protected $model = OverTime::class;

    public function definition(): array
    {
        return [
            'employee_id' => fake()->randomElement(Employee::all()->pluck('id')),
            'date' => fake()->dateTimeThisMonth(),
            'hours' => fake()->randomElement(range(1, 7)),
            'reason' => fake()->realText()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\OverTime;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OverTimeFactory extends Factory
{
    protected $model = OverTime::class;

    public function definition(): array
    {
        return [
            'employee_id' => fake()->randomElement(User::all()->pluck('id')),
            'date' => fake()->date(),
            'hours' => fake()->randomElement(range(1, 14)),
            'reason' => fake()->realText()
        ];
    }
}

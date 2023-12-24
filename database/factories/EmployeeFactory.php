<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'department' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween(1000, 10000),
            'photo' => 'https://picsum.photos/200/300',
            'payed' => $this->faker->boolean(),
        ];
    }
}

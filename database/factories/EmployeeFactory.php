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
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['M', 'F']),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'department' => $this->faker->jobTitle(),
            'photo' => $this->faker->imageUrl(),
            'matriculate' => $this->faker->randomNumber(),
            'order_number' => $this->faker->randomNumber(),
            'address' => $this->faker->address(),
            'base_salary' => $this->faker->randomFloat(2, 1000, 5000),
//            'salary' => $this->faker->numberBetween(1000, 10000),
//            'photo' => 'https://picsum.photos/200/300',
            'payed' => $this->faker->boolean(),
        ];
    }
}

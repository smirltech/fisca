<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);*/

        Employee::factory(10)->create();
        $this->call([
            UserSeeder::class,
            PublicHolidaySeeder::class,
            OverTimeSeeder::class,
        ]);
    }
}

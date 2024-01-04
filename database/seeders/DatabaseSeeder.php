<?php

namespace Database\Seeders;

use App\Models\CNSSData;
use App\Models\Employee;
use App\Models\OverTime;
use App\Models\PaySlip;
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

        Employee::factory(30)->create();
        OverTime::factory(300)->create();
        CNSSData::factory(300)->create();
        PaySlip::factory(300)->create();

        $this->call([
            UserSeeder::class,
            PublicHolidaySeeder::class
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\PublicHoliday;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicHolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // drc public holidays

        PublicHoliday::factory()->create([
            [
                'date' => '2021-01-01',
                'description' => 'New Year\'s Day',
            ],
            [
                'date' => '2021-01-04',
                'description' => 'Martyrs of Independence Day',
            ],
            [
                'date' => '2021-01-16',
                'description' => 'Heroes\' Day',
            ],
            [
                'date' => '2021-01-17',
                'description' => 'Heroes\' Day',
            ],
            [
                'date' => '2021-05-01',
                'description' => 'Labour Day',
            ],
            [
                'date' => '2021-05-17',
                'description' => 'Ascension Day',
            ],
            [
                'date' => '2021-06-30',
                'description' => 'Independence Day',
            ]
        ]);
    }
}

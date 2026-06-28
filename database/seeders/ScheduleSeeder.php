<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Schedule::create([
            'period' => '2024/2025',
            'start_date' => '2024-01-01',
            'end_date' => '2024-12-31',
            'is_active' => true,
        ]);
    }
}

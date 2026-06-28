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
            'period' => '2026/2027',
            'start_date' => '2026-06-01',
            'end_date' => '2026-12-31',
            'is_active' => true,
        ]);
    }
}

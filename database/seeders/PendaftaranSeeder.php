<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        $schedule = Schedule::first();

        if (!$schedule) {
            $this->command->error('Schedule belum tersedia.');
            return;
        }

        Pendaftaran::factory()
            ->count(20)
            ->state([
                'schedule_id' => $schedule->id,
            ])
            ->create();
    }
}
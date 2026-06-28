<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengumuman>
 */
class PengumumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(3, true),
            'tgl' => $this->faker->date(),
            'foto' => 'pengumuman/sample.png',
            'schedule_id' => \App\Models\Schedule::factory(),
        ];
    }
}

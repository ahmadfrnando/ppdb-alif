<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendaftaranFactory extends Factory
{
    public function definition(): array
    {
        $faker = fake('id_ID');

        $ayahPekerjaan = [
            'Wiraswasta',
            'Pegawai Swasta',
            'PNS',
            'Petani',
            'Buruh',
            'Guru',
            'Pedagang',
            'Driver',
        ];

        $ibuPekerjaan = [
            'Ibu Rumah Tangga',
            'Guru',
            'Pegawai Swasta',
            'Wiraswasta',
            'Pedagang',
            'Perawat',
        ];

        $pendidikan = [
            'SD',
            'SMP',
            'SMA/SMK',
            'D3',
            'S1',
        ];

        $agama = [
            'Islam',
            'Kristen',
            'Katolik',
            'Buddha',
            'Hindu',
        ];

        $tanggal = $faker->dateTimeBetween('2020-01-01', '2022-12-31');

        $jarak = $faker->randomFloat(2, 0.30, 8.00);

        return [
            'schedule_id' => Schedule::query()->inRandomOrder()->value('id'),

            'nama_siswa' => $faker->name(),

            'ttl' => 'Binjai, '.$tanggal->format('d F Y'),

            'agama' => $faker->randomElement($agama),

            'warga_negara' => 'Indonesia',

            'jlh_saudara' => $faker->numberBetween(0,4),

            'anak_ke' => $faker->numberBetween(1,5),

            'nama_ayah' => $faker->name('male'),

            'pendidikan_ayah' => $faker->randomElement($pendidikan),

            'pekerjaan_ayah' => $faker->randomElement($ayahPekerjaan),

            'nama_ibu' => $faker->name('female'),

            'pendidikan_ibu' => $faker->randomElement($pendidikan),

            'pekerjaan_ibu' => $faker->randomElement($ibuPekerjaan),

            'nama_wali' => $faker->boolean(20)
                ? $faker->name()
                : null,

            'pendidikan_wali' => $faker->boolean(20)
                ? $faker->randomElement($pendidikan)
                : null,

            'pekerjaan_wali' => $faker->boolean(20)
                ? $faker->randomElement($ayahPekerjaan)
                : null,

            'alamat' => $faker->randomElement([
                'Jl. Jenderal Sudirman Binjai',
                'Jl. Soekarno Hatta Binjai',
                'Jl. Gatot Subroto Binjai',
                'Jl. Cut Nyak Dien Binjai',
                'Jl. Ahmad Yani Binjai',
                'Jl. Samanhudi Binjai',
                'Jl. Diponegoro Binjai',
                'Jl. MT Haryono Binjai',
                'Jl. T. Amir Hamzah Binjai',
                'Jl. Perintis Kemerdekaan Binjai',
            ]).' No. '.$faker->numberBetween(1,200),

            'telp' => '08'.$faker->numerify('##########'),

            'email' => $faker->unique()->safeEmail(),

            'zonasi' => $faker->randomElement([
                'Lulus Zonasi',
                'Tidak Lulus Zonasi',
            ]),

            'jarak' => $jarak,

            'keterangan_jarak' => $jarak <= 2
                ? 'Sangat dekat dengan sekolah'
                : ($jarak <= 5
                    ? 'Masih dalam radius sekolah'
                    : 'Di luar radius prioritas'),
        ];
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'judul' => 'TK Raudhatul Athfal Kota Binjai: Tempat Tumbuh Kembang Anak dengan Pendidikan Berkualitas',
                'tgl' => '2024-12-25',
                'body' => 'TK Raudhatul Athfal Kota Binjai adalah lembaga pendidikan anak usia dini yang berfokus pada pengembangan potensi anak secara holistik, meliputi aspek akademik, karakter, dan spiritual. Berlokasi strategis di Kota Binjai, sekolah ini menjadi pilihan utama para orang tua yang menginginkan pendidikan terbaik untuk buah hati mereka. Lingkungan belajar yang aman, kurikulum berbasis karakter dan keislaman, serta kegiatan ekstrakurikuler yang menarik menjadikan TK Raudhatul Athfal sebagai tempat ideal untuk membangun generasi masa depan yang berakhlak mulia.',
            ],
            [
                'judul' => 'Pendaftaran Peserta Didik Baru TK Raudhatul Athfal Kota Binjai Tahun Ajaran 2024/2025',
                'tgl' => '2024-01-02',
                'body' => 'TK Raudhatul Athfal Kota Binjai membuka pendaftaran peserta didik baru untuk tahun ajaran 2024/2025. Proses pendaftaran akan dilaksanakan pada tanggal 2 Januari hingga 6 Januari 2024 di ruang Tata Usaha TK Raudhatul Athfal. Kami mengundang para orang tua untuk bergabung bersama kami dan memberikan pengalaman pendidikan terbaik bagi anak-anak tercinta. Untuk informasi lebih lanjut, silakan hubungi nomor 0812-3456-7890.',
            ],
            [
                'judul' => 'Prestasi Membanggakan TK Raudhatul Athfal Kota Binjai',
                'tgl' => '2024-12-01',
                'body' => 'Siswa-siswi TK Raudhatul Athfal Kota Binjai telah berhasil menorehkan berbagai prestasi di bidang seni dan kreativitas, seperti juara lomba menggambar, lomba mewarnai, serta tari tradisional. Dengan dukungan dari guru-guru yang berdedikasi, kami terus memberikan motivasi kepada anak-anak untuk mengembangkan bakat mereka sejak dini.',
            ],
        ]);
    }
}

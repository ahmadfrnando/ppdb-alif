@extends('layouts.main')

@section('content')
<div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
  <div class="mb-12 text-center">
      <h2 class="text-4xl font-semibold">Pengumuman Terbaru</h2>
      <p class="mt-4 text-lg leading-relaxed text-gray-500">
          Ikuti perkembangan terbaru dari kami. Semua pengumuman penting dapat Anda temukan di sini.
      </p>
  </div>

  <div class="flex flex-wrap -mx-4">
      <!-- Pengumuman 1 -->
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="overflow-hidden bg-white rounded-lg shadow-lg">
              <div class="p-6">
                  <h5 class="text-xl font-semibold text-gray-800">Pendaftaran Ulang Siswa Tahun Ajaran 2024/2025</h5>
                  <p class="mt-2 text-sm text-gray-500">Tanggal: 10 November 2024</p>
                  <p class="mt-4 text-gray-600">Segera lakukan pendaftaran ulang untuk tahun ajaran 2024/2025. Jangan lewatkan kesempatan untuk memastikan tempat di sekolah kami.</p>
                  <a href="/pengumuman-detail" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
              </div>
          </div>
      </div>

      <!-- Pengumuman 2 -->
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="overflow-hidden bg-white rounded-lg shadow-lg">
              <div class="p-6">
                  <h5 class="text-xl font-semibold text-gray-800">Libur Semester Akhir 2024</h5>
                  <p class="mt-2 text-sm text-gray-500">Tanggal: 15 Desember 2024</p>
                  <p class="mt-4 text-gray-600">Perhatian kepada seluruh siswa, libur semester akhir 2024 akan dimulai pada 15 Desember. Pastikan semua tugas diselesaikan sebelum libur dimulai.</p>
                  <a href="#" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
              </div>
          </div>
      </div>

      <!-- Pengumuman 3 -->
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="overflow-hidden bg-white rounded-lg shadow-lg">
              <div class="p-6">
                  <h5 class="text-xl font-semibold text-gray-800">Workshop Pendidikan Karakter untuk Siswa</h5>
                  <p class="mt-2 text-sm text-gray-500">Tanggal: 20 November 2024</p>
                  <p class="mt-4 text-gray-600">Kami mengundang seluruh siswa untuk mengikuti workshop tentang pendidikan karakter pada 20 November 2024. Jangan lewatkan kesempatan untuk memperluas wawasan.</p>
                  <a href="#" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
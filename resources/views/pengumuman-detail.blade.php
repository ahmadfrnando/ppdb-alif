
@extends('layouts.main')

@section('content')

<section class="container px-4 mx-auto lg:pt-24 lg:pb-64">
  <div class="mb-12 text-center">
      <h2 class="text-4xl font-semibold">Pendaftaran Ulang Siswa Baru</h2>
      <p class="mt-4 text-sm text-gray-500">Tanggal: 1 Desember 2024</p>
  </div>

  <div class="overflow-hidden bg-white rounded-lg shadow-lg">
      <img src="images/1.jpg" alt="Pengumuman Image" class="object-cover w-full h-96">
      <div class="p-6">
          <p class="mt-4 text-gray-600">
              Pengumuman mengenai pendaftaran ulang untuk siswa baru di SMP Nasrani. Bagi seluruh siswa yang sudah diterima di SMP Nasrani 1 Medan, diharapkan segera melakukan pendaftaran ulang untuk memastikan tempat Anda di tahun ajaran baru.
          </p>
          <p class="mt-4 text-gray-600">
              Pendaftaran ulang dilakukan pada tanggal 5-10 Desember 2024, dan dapat dilakukan melalui website resmi sekolah. Jangan lewatkan kesempatan ini agar tidak kehilangan tempat.
          </p>
          <p class="mt-4 text-gray-600">
              Jika ada pertanyaan lebih lanjut, silakan menghubungi admin melalui kontak yang tertera di website atau datang langsung ke sekolah untuk informasi lebih lanjut.
          </p>
          <a href="/pengumuman" class="inline-block mt-6 text-blue-500">Kembali ke Daftar Pengumuman</a>
      </div>
  </div>
</section>

@endsection
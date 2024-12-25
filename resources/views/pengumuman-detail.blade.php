
@extends('layouts.main')

@section('content')

<section class="container px-4 mx-auto lg:pt-24 lg:pb-64">
  <div class="mb-12 text-center">
      <h2 class="text-4xl font-semibold">{{ $pengumuman->judul }}</h2>
      <p class="mt-4 text-sm text-gray-500">{{ $pengumuman->tanggal }}</p>
  </div>

  <div class="overflow-hidden bg-white rounded-lg shadow-lg">
      <img src="{{ asset('storage/'.$pengumuman->foto) }}" alt="Pengumuman Image" class="object-cover w-full h-96">
      <div class="p-6">
          <p class="mt-4 text-gray-600">
              {!! $pengumuman->body !!}
          </p>
          <a href="/pengumuman" class="inline-block mt-6 text-blue-500">Kembali ke Daftar Pengumuman</a>
      </div>
  </div>
</section>

@endsection
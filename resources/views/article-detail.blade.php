@extends('layouts.main')

@section('content')
<section class="container px-4 mx-auto lg:pt-24 lg:pb-64">
    <!-- Header Artikel -->
    <div class="mb-12 text-center">
        <h2 class="text-5xl font-bold text-gray-800">{{ $artikel->judul }}</h2>
        <p class="mt-4 text-sm text-gray-500 italic">{{ \Carbon\Carbon::parse($artikel->tanggal)->format('d F Y') }}</p>
    </div>

    <!-- Konten Artikel -->
    <div class="p-8 mt-6 bg-white rounded-lg shadow-lg">
        <div class="prose max-w-none prose-lg prose-gray">
            {!! $artikel->body !!}
        </div>
        <div class="mt-6 text-center">
            <a href="/article" class="inline-block px-6 py-3 text-sm font-semibold text-dark bg-blue-600 rounded-full hover:bg-blue-700 transition duration-300">
                Kembali ke Artikel
            </a>
        </div>
    </div>
</section>
@endsection

@extends('layouts.main')

@section('content')

<div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
    <div class="mb-12 text-center">
        <h2 class="text-5xl font-extrabold text-gray-800">Artikel Terbaru</h2>
        <p class="mt-4 text-lg text-gray-600">
            Temukan artikel terbaru kami yang memberikan informasi menarik dan inspiratif seputar dunia pendidikan.
        </p>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Artikel Loop -->
        @foreach($artikel as $a)
        <div class="overflow-hidden bg-white rounded-lg shadow-lg group">
            <div class="p-6">
                <h5 class="text-2xl font-bold text-gray-800 group-hover:text-blue-500 transition duration-300">
                    {{ $a->judul }}
                </h5>
                <p class="mt-3 text-sm text-gray-500">{{ \Carbon\Carbon::parse($a->tanggal)->format('d M Y') }}</p>
                <p class="mt-4 text-gray-600 line-clamp-3">
                    {{ \Illuminate\Support\Str::limit(strip_tags($a->body), 100, '...') }}
                </p>
                <a href="/article-detail/{{ $a->id }}" 
                   class="inline-block mt-6 text-blue-600 hover:text-blue-800 font-semibold transition duration-300">
                    Baca Selengkapnya &rarr;
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

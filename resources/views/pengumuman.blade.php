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
        @foreach($pengumuman as $p)
        <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="p-6">
                    <h5 class="text-xl font-semibold text-gray-800">{{ $p->judul }}</h5>
                    <p class="mt-2 text-sm text-gray-500">{{ $p->tanggal }}</p>
                    <p class="mt-4 text-gray-600">
                        {!! Str::limit($p->body, 100) !!}
                    </p>
                    <a href="/pengumuman-detail/{{ $p->id }}" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
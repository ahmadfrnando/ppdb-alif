@extends('layouts.main')

@section('content')

<section class="container px-4 mx-auto lg:pt-24 lg:pb-24">
  <div class="mb-12 text-center">
      <h2 class="text-4xl font-semibold ">Galeri Kegiatan</h2>
      <p class="mt-4 text-lg leading-relaxed text-gray-500">
          Lihat beberapa kegiatan seru yang kami lakukan di TK Raudhatul Athfal. Kami bangga dengan 
          kegiatan belajar yang menyenangkan dan mendidik bagi anak-anak.
      </p>
  </div>
  
  <div class="flex flex-wrap -mx-4">
      @foreach($gallery as $item)
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="relative group">
              <img alt="Gallery Image 1" src="{{ $item->foto }}" class="object-cover w-full h-64 rounded-lg shadow-lg cursor-pointer">
          </div>
      </div>
      @endforeach
  </div>
  <div class="mt-8 text-center lg:mt-12 xl:mt-16">
        {{ $gallery->links() }}
    </div>
</section>
@endsection
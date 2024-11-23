@extends('layouts.main')


@section('content')

<div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
  <div class="mb-12 text-center">
      <h2 class="text-4xl font-semibold">Artikel Terbaru</h2>
      <p class="mt-4 text-lg leading-relaxed text-gray-500">
          Temukan artikel terbaru kami yang memberikan informasi penting dan menarik seputar dunia pendidikan.
      </p>
  </div>

  <div class="flex flex-wrap -mx-4">
      <!-- Artikel 1 -->
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="overflow-hidden bg-white rounded-lg shadow-lg">
              <img alt="Artikel 1" src="images/1.jpg" class="object-cover w-full h-48" />
              <div class="p-6">
                  <h5 class="text-xl font-semibold text-gray-800">Pentingnya Pendidikan Anak Usia Dini</h5>
                  <p class="mt-2 text-gray-600">Mendidik anak sejak dini adalah langkah penting untuk perkembangan mereka. Artikel ini membahas tentang pentingnya pendidikan usia dini bagi masa depan anak.</p>
                  <a href="/article-detail" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
              </div>
          </div>
      </div>

      <!-- Artikel 2 -->
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="overflow-hidden bg-white rounded-lg shadow-lg">
              <img alt="Artikel 2" src="images/2.jpg" class="object-cover w-full h-48" />
              <div class="p-6">
                  <h5 class="text-xl font-semibold text-gray-800">Cara Menjaga Kesehatan Mental Anak</h5>
                  <p class="mt-2 text-gray-600">Kesehatan mental juga sangat penting bagi anak-anak. Artikel ini memberikan tips untuk menjaga kesehatan mental anak sejak usia dini.</p>
                  <a href="#" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
              </div>
          </div>
      </div>

      <!-- Artikel 3 -->
      <div class="w-full px-4 mb-8 md:w-6/12 lg:w-4/12">
          <div class="overflow-hidden bg-white rounded-lg shadow-lg">
              <img alt="Artikel 3" src="images/3.jpg" class="object-cover w-full h-48" />
              <div class="p-6">
                  <h5 class="text-xl font-semibold text-gray-800">Tips Meningkatkan Kreativitas Anak</h5>
                  <p class="mt-2 text-gray-600">Kreativitas anak dapat dibentuk melalui berbagai kegiatan yang menyenangkan. Artikel ini berbagi tips untuk meningkatkan kreativitas anak di usia dini.</p>
                  <a href="#" class="inline-block mt-4 text-blue-500">Baca Selengkapnya &rarr;</a>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
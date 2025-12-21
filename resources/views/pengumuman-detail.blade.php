@extends('layouts.main')

@section('content')

<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
  
  <!-- Decorative Background Elements -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-400/10 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
  </div>

  <div class="container relative px-4 py-12 mx-auto lg:py-24">
    
    <!-- Breadcrumb Navigation -->
    <nav class="flex items-center mb-8 space-x-2 text-sm animate-fade-in">
      <a href="/" class="text-gray-500 transition-colors hover:text-blue-600">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
      </a>
      <span class="text-gray-400">/</span>
      <a href="/pengumuman" class="text-gray-500 transition-colors hover:text-blue-600">Pengumuman</a>
      <span class="text-gray-400">/</span>
      <span class="font-medium text-gray-900">Detail</span>
    </nav>

    <!-- Header Section -->
    <div class="max-w-4xl mx-auto mb-16 text-center animate-slide-up">
      <div class="inline-flex items-center px-4 py-2 mb-6 space-x-2 bg-blue-100 rounded-full">
        <svg class="w-5 h-5 text-blue-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
        </svg>
        <span class="text-sm font-semibold text-blue-600">Pengumuman Resmi</span>
      </div>
      
      <h1 class="mb-4 text-4xl font-bold leading-tight text-transparent lg:text-5xl bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">
        {{ $pengumuman->judul }}
      </h1>
      
      <div class="flex items-center justify-center space-x-6 text-sm text-gray-600">
        <div class="flex items-center space-x-2">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          <span>{{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d F Y') }}</span>
        </div>
        <span class="text-gray-300">•</span>
        <div class="flex items-center space-x-2">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          <span>{{ \Carbon\Carbon::parse($pengumuman->tanggal)->diffForHumans() }}</span>
        </div>
      </div>
    </div>

    <!-- Main Content Card -->
    <div class="max-w-5xl mx-auto">
      <article class="overflow-hidden transition-all duration-500 bg-white shadow-2xl rounded-3xl hover:shadow-3xl animate-fade-in-up">
        
        <!-- Featured Image with Overlay -->
        <div class="relative overflow-hidden group h-96 lg:h-[500px]">
          <img 
            src="{{ asset('storage/'.$pengumuman->foto) }}" 
            alt="{{ $pengumuman->judul }}" 
            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105">
          
          <!-- Image Overlay Gradient -->
          <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:opacity-100"></div>
          
          <!-- Zoom Icon on Hover -->
          <div class="absolute inset-0 flex items-center justify-center transition-all duration-500 transform opacity-0 group-hover:opacity-100">
            <div class="p-4 transition-transform duration-500 transform scale-75 bg-white rounded-full shadow-lg group-hover:scale-100">
              <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
              </svg>
            </div>
          </div>
        </div>

        <!-- Content Body -->
        <div class="p-8 lg:p-12">
          
          <!-- Decorative Line -->
          <div class="flex items-center mb-8 space-x-4">
            <div class="w-16 h-1 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600"></div>
            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">Isi Pengumuman</span>
          </div>

          <!-- Article Content -->
          <div class="mb-12 prose prose-lg max-w-none prose-headings:font-bold prose-headings:text-gray-900 prose-p:text-gray-700 prose-p:leading-relaxed prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline prose-strong:text-gray-900 prose-ul:text-gray-700 prose-ol:text-gray-700">
            {!! $pengumuman->body !!}
          </div>

          <!-- Divider -->
          <div class="my-8 border-t border-gray-200"></div>

          <!-- Action Buttons -->
          <div class="flex flex-col items-center justify-between space-y-4 sm:flex-row sm:space-y-0">
            
            <!-- Back Button -->
            <a href="/pengumuman" 
               class="inline-flex items-center px-6 py-3 space-x-2 text-gray-700 transition-all duration-300 transform bg-gray-100 rounded-xl hover:bg-gray-200 hover:-translate-x-1 group">
              <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
              </svg>
              <span class="font-semibold">Kembali</span>
            </a>
          </div>

        </div>
      </article>

      <!-- Related or Navigation Section -->
      <div class="mt-12 text-center animate-fade-in">
        <p class="mb-4 text-sm text-gray-600">Ingin melihat pengumuman lainnya?</p>
        <a href="/pengumuman" 
           class="inline-flex items-center px-8 py-4 space-x-2 font-semibold text-white transition-all duration-300 transform rounded-full shadow-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:shadow-2xl hover:scale-105">
          <span>Lihat Semua Pengumuman</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Custom Animations -->
<style>
  @keyframes fade-in {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  @keyframes slide-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fade-in-up {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in {
    animation: fade-in 0.6s ease-out;
  }

  .animate-slide-up {
    animation: slide-up 0.8s ease-out;
  }

  .animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
  }

  /* Smooth scroll */
  html {
    scroll-behavior: smooth;
  }

  /* Custom shadow */
  .shadow-3xl {
    box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.3);
  }
</style>

@endsection
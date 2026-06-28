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

    <div class="max-w-5xl mx-auto">

      <!-- ===================== -->
      <!-- BAGIAN 1: PENGUMUMAN  -->
      <!-- ===================== -->
      <article class="overflow-hidden transition-all duration-500 bg-white shadow-xl rounded-3xl animate-fade-in-up">

        <!-- Header Section -->
        <div class="px-8 pt-10 pb-6 text-center lg:px-14 lg:pt-14">
          <div class="inline-flex items-center px-4 py-2 mb-5 space-x-2 bg-blue-100 rounded-full">
            <svg class="w-4 h-4 text-blue-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
            </svg>
            <span class="text-sm font-semibold text-blue-600">Pengumuman Kelulusan Resmi</span>
          </div>

          <!-- Judul -->
          <h1 class="mb-4 text-3xl font-bold leading-tight text-transparent lg:text-4xl bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">
            {{ $pengumuman->judul }}
          </h1>

          <!-- Tanggal -->
          <div class="flex items-center justify-center space-x-2 text-sm text-gray-500">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span>{{ \Carbon\Carbon::parse($pengumuman->tgl)->isoFormat('D MMMM YYYY') }}</span>
          </div>
        </div>

        <!-- Foto (jika ada) -->
        @if($pengumuman->foto)
        <div class="relative overflow-hidden group mx-8 mb-8 rounded-2xl lg:mx-14 h-72 lg:h-[420px]">
          <img
            src="{{ asset('storage/'.$pengumuman->foto) }}"
            alt="{{ $pengumuman->judul }}"
            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-t from-black/50 via-transparent to-transparent group-hover:opacity-100 rounded-2xl"></div>
        </div>
        @endif

        <!-- Isi Pengumuman -->
        <div class="px-8 pb-10 lg:px-14 lg:pb-14">

          <!-- Dekoratif label -->
          <div class="flex items-center mb-6 space-x-3">
            <div class="w-12 h-1 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600"></div>
            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">Isi Pengumuman</span>
          </div>

          <!-- Body -->
          <div class="prose prose-lg max-w-none
            prose-headings:font-bold prose-headings:text-gray-900
            prose-p:text-gray-700 prose-p:leading-relaxed
            prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline
            prose-strong:text-gray-900
            prose-ul:text-gray-700 prose-ol:text-gray-700">
            {!! $pengumuman->body !!}
          </div>

          <!-- Tombol Kembali -->
          <div class="flex items-center mt-10 mb-4">
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

      <!-- ============================== -->
      <!-- BAGIAN 2: DAFTAR HASIL KELULUSAN -->
      <!-- ============================== -->
      <div class="mt-10 animate-fade-in-up">

        <!-- Section Header -->
        <div class="flex items-center mb-6 mt-6 space-x-4">
          <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 shrink-0">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
            </svg>
          </div>
          <div>
            <h2 class="text-2xl font-bold text-gray-900 lg:text-3xl">Daftar Hasil Kelulusan</h2>
            <p class="text-sm text-gray-500">Calon Siswa/i Pendaftar</p>
          </div>
        </div>

        @if($siswas->isEmpty())
          <!-- Empty State -->
          <div class="flex flex-col items-center justify-center py-16 bg-white shadow-md rounded-3xl">
            <div class="flex items-center justify-center w-16 h-16 mb-4 bg-gray-100 rounded-full">
              <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
              </svg>
            </div>
            <p class="text-base font-medium text-gray-500">Belum ada data hasil kelulusan.</p>
          </div>

        @else
          <!-- Tabel Responsive -->
          <div class="overflow-hidden bg-white shadow-md rounded-3xl">
            <div class="overflow-x-auto">
              <table class="min-w-full text-sm divide-y divide-gray-200">
                <thead>
                  <tr class="bg-gradient-to-r from-blue-600 to-indigo-600">
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap rounded-tl-3xl">No</th>
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap">Nama Siswa</th>
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap">Tempat, Tanggal Lahir</th>
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap">Alamat</th>
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap">Status Zonasi</th>
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap">Jarak</th>
                    <th class="px-4 py-4 font-semibold text-left text-white whitespace-nowrap rounded-tr-3xl">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                  @foreach($siswas as $index => $siswa)
                  <tr class="transition-colors duration-150 hover:bg-blue-50/50 {{ $loop->even ? 'bg-gray-50/50' : 'bg-white' }}">

                    <!-- No -->
                    <td class="px-4 py-4 font-medium text-center text-gray-500 whitespace-nowrap">
                      {{ $loop->iteration }}
                    </td>

                    <!-- Nama Siswa -->
                    <td class="px-4 py-4 font-semibold text-gray-900 whitespace-nowrap">
                      {{ $siswa->nama_siswa }}
                    </td>

                    <!-- TTL -->
                    <td class="px-4 py-4 text-gray-700">
                      {{ $siswa->ttl ?? '-' }}
                    </td>

                    <!-- Alamat -->
                    <td class="px-4 py-4 text-gray-700 min-w-[160px]">
                      {{ $siswa->alamat ?? '-' }}
                    </td>

                    <!-- Status Zonasi (Badge) -->
                    <td class="px-4 py-4 whitespace-nowrap">
                      @if($siswa->zonasi === 'Lulus Zonasi')
                        <span class="inline-flex items-center px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">
                          <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                          Lulus Zonasi
                        </span>
                      @elseif($siswa->zonasi === 'Tidak Lulus Zonasi')
                        <span class="inline-flex items-center px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">
                          <span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-1.5"></span>
                          Tidak Lulus Zonasi
                        </span>
                      @else
                        <span class="inline-flex items-center px-3 py-1 text-xs font-semibold text-gray-500 bg-gray-100 rounded-full">
                          -
                        </span>
                      @endif
                    </td>

                    <!-- Jarak -->
                    <td class="px-4 py-4 text-gray-700 whitespace-nowrap">
                      @if($siswa->jarak !== null)
                        {{ $siswa->jarak }} KM
                      @else
                        <span class="text-gray-400">-</span>
                      @endif
                    </td>

                    <!-- Keterangan Jarak -->
                    <td class="px-4 py-4 text-gray-700">
                      {{ $siswa->keterangan_jarak ?? '-' }}
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Footer tabel -->
            <div class="flex items-center justify-between px-6 py-4 border-t border-gray-100 bg-gray-50/80 rounded-b-3xl">
              <span class="text-xs text-gray-400">
                Menampilkan {{ $siswas->count() }} data calon siswa/i
              </span>
              <span class="text-xs text-gray-400">
                Data bersifat resmi dan tidak dapat diubah
              </span>
            </div>
          </div>
        @endif
      </div>

      <!-- Link kembali ke semua pengumuman -->
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

  html {
    scroll-behavior: smooth;
  }
</style>

@endsection
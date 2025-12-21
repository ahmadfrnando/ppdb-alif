<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ $favicon }}" />
    <title>{{ $title }} - TK. RAUDHATUL ATHFAL KOTA BINJAI</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-8 px-4">
    
    <div class="max-w-5xl mx-auto">
        
        <!-- Card Pendaftaran Ditutup -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            
            <!-- Header -->
            <div class="bg-gradient-to-r from-red-500 to-red-600 px-8 py-6">
                <div class="flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white text-center mt-4">
                    Pendaftaran Ditutup
                </h1>
            </div>

            <!-- Content -->
            <div class="px-8 py-12">
                <div class="text-center space-y-6">
                    
                    <!-- Icon Ilustrasi -->
                    <div class="flex justify-center">
                        <div class="bg-red-100 rounded-full p-6">
                            <svg class="w-20 h-20 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Pesan Utama -->
                    <div class="space-y-2">
                        <h2 class="text-2xl font-semibold text-gray-800">
                            Mohon Maaf
                        </h2>
                        <p class="text-lg text-gray-600">
                            Pendaftaran peserta didik baru saat ini sudah ditutup
                        </p>
                    </div>

                    <!-- Info Periode -->
                    <div class="bg-red-50 border border-red-200 rounded-xl p-6 max-w-md mx-auto">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-600">Tanggal Mulai:</span>
                                <span class="text-sm font-bold text-gray-800">{{ \Carbon\Carbon::parse($tanggalMulai)->format('d F Y') }}</span>
                            </div>
                            <div class="h-px bg-red-200"></div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-600">Tanggal Selesai:</span>
                                <span class="text-sm font-bold text-gray-800">{{ \Carbon\Carbon::parse($tanggalSelesai)->format('d F Y') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Keterangan Tambahan -->
                    <div class="max-w-xl mx-auto">
                        <p class="text-gray-600">
                            Periode pendaftaran telah berakhir pada tanggal 
                            <span class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($tanggalSelesai)->format('d F Y') }}</span>.
                            Silakan cek pengumuman hasil seleksi atau hubungi panitia untuk informasi lebih lanjut.
                        </p>
                    </div>

                    <!-- Tombol Action -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-6">
                        
                        <!-- Tombol Lihat Pengumuman -->
                        <a href="{{ route('pengumuman') }}" 
                           class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl hover:from-blue-600 hover:to-blue-700 transform hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                            </svg>
                            Lihat Pengumuman
                        </a>

                        <!-- Tombol Kembali ke Beranda -->
                        <a href="{{ url('/') }}" 
                           class="inline-flex items-center px-8 py-3 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Kembali ke Beranda
                        </a>
                        
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-4 text-center">
                <p class="text-sm text-gray-500">
                    &copy; {{ date('Y') }} TK. Raudhatul Athfal Kota Binjai. All rights reserved.
                </p>
            </div>

        </div>

    </div>
</body>

</html>
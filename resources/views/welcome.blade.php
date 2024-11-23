@extends('layouts.main')

@section('content')

<section class="pb-20 -mt-24 bg-gray-300">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap">
            <!-- Information Card 1 -->
            <div class="w-full px-4 pt-6 text-center lg:pt-12 md:w-4/12">
                <div class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg">
                    <div class="flex-auto px-4 py-5">
                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-red-400 rounded-full shadow-lg">
                            <i class="fas fa-child"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Lingkungan Belajar Islami</h6>
                        <p class="mt-2 mb-4 text-gray-600">
                            TK Raudhatul Athfal menyediakan lingkungan belajar yang Islami, mendukung perkembangan karakter dan akhlak anak-anak.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Information Card 2 -->
            <div class="w-full px-4 text-center md:w-4/12">
                <div class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg">
                    <div class="flex-auto px-4 py-5">
                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-blue-400 rounded-full shadow-lg">
                            <i class="fas fa-book"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Kurikulum Berkualitas</h6>
                        <p class="mt-2 mb-4 text-gray-600">
                            Kurikulum kami dirancang untuk memaksimalkan perkembangan kognitif dan keterampilan sosial anak-anak di usia dini.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Information Card 3 -->
            <div class="w-full px-4 pt-6 text-center md:w-4/12">
                <div class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg">
                    <div class="flex-auto px-4 py-5">
                        <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-green-400 rounded-full shadow-lg">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Perhatian dan Dukungan</h6>
                        <p class="mt-2 mb-4 text-gray-600">
                            Setiap anak akan mendapat perhatian dan dukungan sesuai kebutuhan dalam lingkungan belajar yang positif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-wrap items-center mt-32">
            <!-- Description Section -->
            <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                <div class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-gray-600 bg-gray-100 rounded-full shadow-lg">
                    <i class="text-xl fas fa-school"></i>
                </div>
                <h3 class="mb-2 text-3xl font-semibold leading-normal">
                    Bergabung Bersama Kami
                </h3>
                <p class="mt-4 mb-4 text-lg font-light leading-relaxed text-gray-700">
                    TK Raudhatul Athfal Kota Binjai mengajak para orang tua untuk mendaftarkan putra-putri mereka. Kami siap membantu dan memberikan pengalaman pendidikan terbaik.
                </p>
                <p class="mt-0 mb-4 text-lg font-light leading-relaxed text-gray-700">
                    Mulai pendaftaran dan nikmati kemudahan dalam proses registrasi secara online dengan layanan yang ramah dan terpercaya.
                </p>
                <a href="{{ route('pendaftaran.index') }}" class="mt-8 font-bold text-gray-800">Mulai Pendaftaran Sekarang!</a>
            </div>
            
            <!-- Image Section -->
            <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white bg-green-600 rounded-lg shadow-lg">
                    <img alt="TK Raudhatul Athfal" src="{{ asset('images/4.jpg') }}" class="w-full align-middle rounded-t-lg" />
                    <blockquote class="relative p-8 mb-4">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 block w-full" style="height: 95px; top: -94px;">
                            <polygon points="-30,95 583,95 583,65" class="text-green-600 fill-current"></polygon>
                        </svg>
                        <h4 class="text-xl font-bold">
                            Pendidikan yang Bermakna
                        </h4>
                        <p class="mt-2 font-light text-md">
                            Kami mengutamakan pendidikan yang berfokus pada pengembangan karakter dan keterampilan anak-anak secara menyeluruh.
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="relative py-20">
    <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
        style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                <img alt="..." class="max-w-full rounded-lg shadow-lg"
                    src="{{ asset('images/2.jpg') }}" />
            </div>
            <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                <div class="md:pr-12">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-pink-600 bg-pink-300 rounded-full shadow-lg">
                        <i class="text-xl fas fa-rocket"></i>
                    </div>
                    <h3 class="text-3xl font-semibold">TK. RAUDHATUL ATHFAL KOTA BINJAI</h3>
                    <p class="mt-4 text-lg leading-relaxed text-gray-600">
                        Pendaftaran peserta didik baru di TK. Raudhatul Athfal Kota Binjai telah dibuka. Kami menyambut hangat putra-putri Anda untuk bergabung bersama kami dalam lingkungan pendidikan yang positif dan ramah.
                    </p>
                    <ul class="mt-6 list-none">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"><i
                                            class="fas fa-fingerprint"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">
                                        Program Pendidikan Berbasis Karakter
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"><i
                                            class="fab fa-html5"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">Lingkungan Belajar yang Interaktif</h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"><i
                                            class="far fa-paper-plane"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">Pengembangan Kreativitas Anak</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="relative block pb-20 bg-gray-900">
    <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
        style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
        <div class="flex flex-wrap justify-center text-center">
            <div class="w-full px-4 lg:w-6/12">
                <h2 class="text-4xl font-semibold text-white">Pendaftaran Peserta Didik Baru</h2>
                <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-500">
                    Selamat datang di website Pendaftaran Peserta Didik Baru di TK Raudhatul Athfal Kota Binjai. 
                    Kami menyediakan platform yang mudah diakses untuk orang tua dan wali dalam mendaftarkan 
                    anak-anak ke sekolah kami yang penuh dengan pembelajaran menyenangkan.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center mt-12">
            <div class="w-full px-4 text-center lg:w-3/12">
                <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg">
                    <i class="text-xl fas fa-medal"></i>
                </div>
                <h6 class="mt-5 text-xl font-semibold text-white">Layanan Terbaik</h6>
                <p class="mt-2 mb-4 text-gray-500">
                    Kami menyediakan layanan pendaftaran yang mudah, cepat, dan aman. Proses pendaftaran dapat dilakukan 
                    secara online tanpa perlu datang langsung ke sekolah.
                </p>
            </div>
            <div class="w-full px-4 text-center lg:w-3/12">
                <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg">
                    <i class="text-xl fas fa-poll"></i>
                </div>
                <h5 class="mt-5 text-xl font-semibold text-white">Informasi Lengkap</h5>
                <p class="mt-2 mb-4 text-gray-500">
                    Kami menyediakan informasi lengkap tentang proses pendaftaran, kurikulum, serta fasilitas yang ada di TK 
                    Raudhatul Athfal, untuk membantu orang tua dalam memilih sekolah terbaik untuk anak-anak mereka.
                </p>
            </div>
            <div class="w-full px-4 text-center lg:w-3/12">
                <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg">
                    <i class="text-xl fas fa-lightbulb"></i>
                </div>
                <h5 class="mt-5 text-xl font-semibold text-white">Bergabung dengan Kami</h5>
                <p class="mt-2 mb-4 text-gray-500">
                    Daftarkan anak Anda sekarang dan berikan mereka kesempatan untuk berkembang di lingkungan yang mendukung 
                    dan penuh kasih sayang, bersama teman-teman baru dan guru yang berpengalaman.
                </p>
            </div>
        </div>
    </div>
    
</section>
@endsection
@extends('layouts.main')

@section('content')
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

@endsection
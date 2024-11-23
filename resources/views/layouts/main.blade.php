<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ $favicon }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @vite('resources/css/app.css')
    <title> {{ $title }}- TK. RAUDHATUL ATHFAL KOTA BINJAI</title>
    
</head>

<body class="antialiased text-gray-800">
    <nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 ">
        <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
            <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
                <a class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed text-white uppercase whitespace-nowrap"
                    href="#">TK. RAUDHATUL ATHFAL KOTA BINJAI</a><button
                    class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="items-center flex-grow hidden bg-white lg:flex lg:bg-transparent lg:shadow-none"
                id="example-collapse-navbar">
                <ul class="flex flex-col list-none lg:flex-row lg:ml-auto">
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-white lg:hover:text-gray-300 lg:py-2"
                            href="/"><span
                                class="inline-block ml-2">Beranda</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-white lg:hover:text-gray-300 lg:py-2"
                            href="/profil"><span
                                class="inline-block ml-2">Profile</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-white lg:hover:text-gray-300 lg:py-2"
                            href="/gallery"><span
                                class="inline-block ml-2">Gallery</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-white lg:hover:text-gray-300 lg:py-2"
                            href="/article"><span
                                class="inline-block ml-2">Article</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-white lg:hover:text-gray-300 lg:py-2"
                            href="/pengumuman"><span
                                class="inline-block ml-2">pengumuman</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-xs font-bold text-gray-800 uppercase lg:text-white lg:hover:text-gray-300 lg:py-2"
                            href="/contact"><span
                                class="inline-block ml-2">contact</span></a>
                    </li>
                    <li class="flex items-center">
                        <a href="/pendaftaran"
                            class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-gray-800 uppercase bg-white rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                            type="button" style="transition: all 0.15s ease 0s;">
                            <i class="fas fa-laptop"></i> Daftar Sekarang
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative flex items-center content-center justify-center pt-16 pb-32" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("/images/jumbotron.jpg");'>
                <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-75"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full px-4 ml-auto mr-auto text-center lg:w-6/12">
                        <div class="pr-12">
                            <h1 class="text-5xl font-semibold text-white">
                                Selamat Datang di Website Pendaftaran
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                Website ini memudahkan pendaftaran peserta didik baru di TK. Raudhatul Athfal Kota Binjai. Ikuti langkah-langkah pendaftaran dengan mudah dan cepat melalui sistem kami.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        @yield('content')
    </main>
    <footer class="relative pt-8 pb-6 bg-gray-300">
        <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
        style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <p class="text-center text-gray-600">Copyright &copy; 2023 TK. RAUDHATUL ATHFAL KOTA BINJAI</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ $favicon }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @vite('resources/css/app.css')
    <title>{{ $title }} - TK. RAUDHATUL ATHFAL KOTA BINJAI</title>
</head>

<body class="antialiased text-gray-800">

    {{-- ══════════════════════════════════
         NAVBAR
    ══════════════════════════════════ --}}
    <nav class="absolute top-0 z-50 w-full px-2 py-3">
        <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">

            {{-- Brand + Hamburger --}}
            <div class="flex items-center justify-between w-full lg:w-auto">
                <a class="text-sm font-bold leading-relaxed text-white uppercase"
                   href="#">
                    TK. RAUDHATUL ATHFAL KOTA BINJAI
                </a>

                {{-- Hamburger Button --}}
                <button
                    id="navbar-toggle"
                    class="flex flex-col items-center justify-center w-10 h-10 lg:hidden focus:outline-none"
                    type="button"
                    aria-label="Toggle navigation"
                    aria-expanded="false">
                    <span id="bar1" class="block w-6 bg-white transition-all duration-300" style="height:2px; margin-bottom:5px;"></span>
                    <span id="bar2" class="block w-6 bg-white transition-all duration-300" style="height:2px; margin-bottom:5px;"></span>
                    <span id="bar3" class="block w-6 bg-white transition-all duration-300" style="height:2px;"></span>
                </button>
            </div>

            {{-- Nav Menu --}}
            <div id="navbar-menu"
                 class="hidden w-full lg:flex lg:w-auto lg:items-center">
                <ul class="flex flex-col w-full mt-2 rounded bg-white bg-opacity-95 shadow-lg
                           lg:flex-row lg:mt-0 lg:bg-transparent lg:shadow-none lg:ml-auto">

                    <li>
                        <a class="block px-4 py-3 text-xs font-bold text-gray-800 uppercase
                                  lg:text-white lg:hover:text-gray-300 lg:py-2 lg:px-3"
                           href="/">Beranda</a>
                    </li>
                    <li>
                        <a class="block px-4 py-3 text-xs font-bold text-gray-800 uppercase
                                  lg:text-white lg:hover:text-gray-300 lg:py-2 lg:px-3"
                           href="/profil">Profile</a>
                    </li>
                    <li>
                        <a class="block px-4 py-3 text-xs font-bold text-gray-800 uppercase
                                  lg:text-white lg:hover:text-gray-300 lg:py-2 lg:px-3"
                           href="/gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="block px-4 py-3 text-xs font-bold text-gray-800 uppercase
                                  lg:text-white lg:hover:text-gray-300 lg:py-2 lg:px-3"
                           href="/article">Article</a>
                    </li>
                    <li>
                        <a class="block px-4 py-3 text-xs font-bold text-gray-800 uppercase
                                  lg:text-white lg:hover:text-gray-300 lg:py-2 lg:px-3"
                           href="/pengumuman">Pengumuman</a>
                    </li>
                    <li>
                        <a class="block px-4 py-3 text-xs font-bold text-gray-800 uppercase
                                  lg:text-white lg:hover:text-gray-300 lg:py-2 lg:px-3"
                           href="/contact">Contact</a>
                    </li>
                    <li class="flex items-center px-4 py-3 lg:px-3 lg:py-0">
                        <a href="/pendaftaran"
                           class="inline-block w-full px-4 py-2 text-xs font-bold text-center text-gray-800
                                  uppercase bg-white rounded shadow hover:shadow-md transition-all duration-150
                                  lg:w-auto">
                            <i class="fas fa-laptop mr-1"></i> Daftar Sekarang
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    {{-- ══════════════════════════════════
         MAIN CONTENT
    ══════════════════════════════════ --}}
    <main>
        {{-- Hero / Jumbotron --}}
        <div class="relative flex items-center content-center justify-center pt-16 pb-32"
             style="min-height: 75vh;">

            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                 style='background-image: url("/images/jumbotron.jpg");'>
                <span class="absolute w-full h-full bg-black opacity-75"></span>
            </div>

            <div class="container relative mx-auto px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <div class="w-full px-4 text-center lg:w-6/12">
                        <h1 class="text-3xl font-semibold text-white sm:text-4xl lg:text-5xl leading-tight">
                            Selamat Datang di Website Pendaftaran
                        </h1>
                        <p class="mt-4 text-base text-gray-300 sm:text-lg">
                            Website ini memudahkan pendaftaran peserta didik baru di TK. Raudhatul Athfal
                            Kota Binjai. Ikuti langkah-langkah pendaftaran dengan mudah dan cepat melalui
                            sistem kami.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Wave divider --}}
            <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden pointer-events-none"
                 style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="none" viewBox="0 0 2560 100">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        @yield('content')
    </main>

    {{-- ══════════════════════════════════
         FOOTER
    ══════════════════════════════════ --}}
    <footer class="relative pt-8 pb-6 bg-gray-300">
        <div class="absolute top-0 left-0 right-0 w-full -mt-20 overflow-hidden pointer-events-none"
             style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="none" viewBox="0 0 2560 100">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <p class="text-center text-gray-600 text-sm">
            Copyright &copy; 2023 TK. RAUDHATUL ATHFAL KOTA BINJAI
        </p>
    </footer>

    {{-- ══════════════════════════════════
         HAMBURGER SCRIPT (vanilla JS, no jQuery)
    ══════════════════════════════════ --}}
    <script>
        (function () {
            const btn  = document.getElementById('navbar-toggle');
            const menu = document.getElementById('navbar-menu');
            const bar1 = document.getElementById('bar1');
            const bar2 = document.getElementById('bar2');
            const bar3 = document.getElementById('bar3');

            btn.addEventListener('click', function () {
                const isOpen = !menu.classList.contains('hidden');

                if (isOpen) {
                    // Tutup menu
                    menu.classList.add('hidden');
                    btn.setAttribute('aria-expanded', 'false');
                    // Kembali ke icon hamburger
                    bar1.style.transform = '';
                    bar2.style.opacity   = '1';
                    bar3.style.transform = '';
                } else {
                    // Buka menu
                    menu.classList.remove('hidden');
                    btn.setAttribute('aria-expanded', 'true');
                    // Animasi jadi tanda X
                    bar1.style.transform = 'translateY(7px) rotate(45deg)';
                    bar2.style.opacity   = '0';
                    bar3.style.transform = 'translateY(-7px) rotate(-45deg)';
                }
            });

            // Auto-handle saat resize ke desktop
            window.addEventListener('resize', function () {
                if (window.innerWidth >= 1024) {
                    menu.classList.remove('hidden');
                } else {
                    if (btn.getAttribute('aria-expanded') === 'false') {
                        menu.classList.add('hidden');
                    }
                }
            });
        })();
    </script>

</body>
</html>
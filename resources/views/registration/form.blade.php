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
        <!-- Header Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Form Pendaftaran Siswa Baru</h1>
                <p class="text-gray-600">TK. Raudhatul Athfal Kota Binjai</p>
                <div class="mt-4 h-1 w-24 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full"></div>
            </div>
        </div>

        <!-- Notifikasi -->
        @if (session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-lg shadow-md animate-fade-in">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-green-800 font-medium">{{ session('success') }}</p>
            </div>
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-lg shadow-md animate-fade-in">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-red-800 font-medium">{{ session('error') }}</p>
            </div>
        </div>
        @endif

        <!-- Main Form Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <form action="{{ route('pendaftaran.store') }}" method="POST" id="registrationForm">
                @csrf

                <!-- Progress Steps -->
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 px-8 py-6">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center step-indicator active" data-step="1">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-blue-600 font-bold shadow-lg">
                                1
                            </div>
                            <span class="ml-3 text-white font-medium hidden sm:inline">Data Siswa</span>
                        </div>
                        <div class="flex-1 h-1 bg-blue-300 mx-4"></div>
                        <div class="flex items-center step-indicator" data-step="2">
                            <div class="w-10 h-10 bg-blue-300 rounded-full flex items-center justify-center text-white font-bold">
                                2
                            </div>
                            <span class="ml-3 text-blue-100 font-medium hidden sm:inline">Data Orang Tua</span>
                        </div>
                    </div>
                </div>

                <div class="p-8">
                    <!-- Step 1: Data Siswa -->
                    <div class="form-step active" id="step1">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2 flex items-center">
                                <svg class="w-7 h-7 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Data Siswa
                            </h2>
                            <p class="text-gray-600 ml-10">Lengkapi informasi data siswa dengan benar</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label for="nama_siswa" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Nama Lengkap Siswa <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="nama_siswa" id="nama_siswa" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                    placeholder="Masukkan nama lengkap siswa"
                                    value="{{ old('nama_siswa') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="ttl" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Tempat, Tanggal Lahir <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="ttl" id="ttl" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                    placeholder="Contoh: Jakarta, 15 Agustus 2019"
                                    value="{{ old('ttl') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="agama" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Agama <span class="text-red-500">*</span>
                                </label>
                                <select name="agama" id="agama" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                    required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="warga_negara" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Kewarganegaraan <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="warga_negara" id="warga_negara" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                    placeholder="Contoh: Indonesia"
                                    value="{{ old('warga_negara', 'Indonesia') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="jlh_saudara" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Jumlah Saudara <span class="text-red-500">*</span>
                                </label>
                                <input type="number" name="jlh_saudara" id="jlh_saudara" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                    placeholder="Jumlah saudara kandung"
                                    value="{{ old('jlh_saudara') }}" min="0" required>
                            </div>

                            <div class="form-group">
                                <label for="anak_ke" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Anak Ke- <span class="text-red-500">*</span>
                                </label>
                                <input type="number" name="anak_ke" id="anak_ke" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                    placeholder="Urutan anak"
                                    value="{{ old('anak_ke') }}" min="1" required>
                            </div>
                        </div>

                        <div class="flex justify-end mt-8">
                            <button type="button" onclick="nextStep()" 
                                class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition duration-200 shadow-lg flex items-center">
                                Selanjutnya
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Data Orang Tua -->
                    <div class="form-step" id="step2" style="display: none;">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2 flex items-center">
                                <svg class="w-7 h-7 mr-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Data Orang Tua
                            </h2>
                            <p class="text-gray-600 ml-10">Lengkapi informasi data orang tua/wali dengan benar</p>
                        </div>

                        <!-- Data Ayah -->
                        <div class="bg-blue-50 p-6 rounded-xl mb-6">
                            <h3 class="text-lg font-bold text-blue-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Data Ayah
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="nama_ayah" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Ayah <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400 bg-white" 
                                        placeholder="Nama lengkap ayah"
                                        value="{{ old('nama_ayah') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_ayah" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pendidikan Ayah <span class="text-red-500">*</span>
                                    </label>
                                    <select name="pendidikan_ayah" id="pendidikan_ayah" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400 bg-white" 
                                        required>
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="SD" {{ old('pendidikan_ayah') == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan_ayah') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA/SMK" {{ old('pendidikan_ayah') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                        <option value="D3" {{ old('pendidikan_ayah') == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ old('pendidikan_ayah') == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_ayah') == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan_ayah') == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ayah" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pekerjaan Ayah <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400 bg-white" 
                                        placeholder="Pekerjaan ayah"
                                        value="{{ old('pekerjaan_ayah') }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Data Ibu -->
                        <div class="bg-purple-50 p-6 rounded-xl mb-6">
                            <h3 class="text-lg font-bold text-purple-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Data Ibu
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="nama_ibu" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Ibu <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 hover:border-purple-400 bg-white" 
                                        placeholder="Nama lengkap ibu"
                                        value="{{ old('nama_ibu') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_ibu" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pendidikan Ibu <span class="text-red-500">*</span>
                                    </label>
                                    <select name="pendidikan_ibu" id="pendidikan_ibu" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 hover:border-purple-400 bg-white" 
                                        required>
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="SD" {{ old('pendidikan_ibu') == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan_ibu') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA/SMK" {{ old('pendidikan_ibu') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                        <option value="D3" {{ old('pendidikan_ibu') == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ old('pendidikan_ibu') == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_ibu') == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan_ibu') == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_ibu" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pekerjaan Ibu <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 hover:border-purple-400 bg-white" 
                                        placeholder="Pekerjaan ibu"
                                        value="{{ old('pekerjaan_ibu') }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Data Wali -->
                        <div class="bg-indigo-50 p-6 rounded-xl mb-6">
                            <h3 class="text-lg font-bold text-indigo-800 mb-2 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Data Wali (Opsional)
                            </h3>
                            <p class="text-sm text-gray-600 mb-4">Kosongkan jika tidak ada wali</p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="nama_wali" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Wali
                                    </label>
                                    <input type="text" name="nama_wali" id="nama_wali" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 hover:border-indigo-400 bg-white" 
                                        placeholder="Nama lengkap wali"
                                        value="{{ old('nama_wali') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_wali" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pendidikan Wali
                                    </label>
                                    <select name="pendidikan_wali" id="pendidikan_wali" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 hover:border-indigo-400 bg-white">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="SD" {{ old('pendidikan_wali') == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan_wali') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA/SMK" {{ old('pendidikan_wali') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                        <option value="D3" {{ old('pendidikan_wali') == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ old('pendidikan_wali') == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_wali') == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan_wali') == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_wali" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pekerjaan Wali
                                    </label>
                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 hover:border-indigo-400 bg-white" 
                                        placeholder="Pekerjaan wali"
                                        value="{{ old('pekerjaan_wali') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Data Kontak -->
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Informasi Kontak
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="telp" class="block text-sm font-semibold text-gray-700 mb-2">
                                        No. Telepon/HP <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                        </div>
                                        <input type="tel" name="telp" id="telp" 
                                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                            placeholder="08xx xxxx xxxx"
                                            value="{{ old('telp') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                            </svg>
                                        </div>
                                        <input type="email" name="email" id="email" 
                                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                            placeholder="contoh@email.com"
                                            value="{{ old('email') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-6">
                                <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Alamat Lengkap <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute top-3 left-0 pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="alamat" id="alamat" 
                                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 hover:border-blue-400" 
                                        placeholder="Ketik untuk mencari alamat..."
                                        value="{{ old('alamat') }}" required>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Mulai ketik untuk mendapatkan saran alamat dari Google Maps
                                </p>
                            </div>

                            <!-- Hidden fields untuk jarak -->
                            <input type="hidden" name="jarakText" id="jarakText">
                            <input type="hidden" name="jarakValue" id="jarakValue">

                            <!-- Info Jarak -->
                            <div id="distanceInfo" class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg hidden">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-semibold text-blue-800">Jarak dari sekolah:</p>
                                        <p class="text-lg font-bold text-blue-900" id="distanceText">-</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-8">
                            <button type="button" onclick="prevStep()" 
                                class="px-8 py-3 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition duration-200 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                Kembali
                            </button>
                            <div class="flex gap-3">
                                <a href="/" 
                                    class="px-8 py-3 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition duration-200 flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Batal
                                </a>
                                <button type="submit" 
                                    class="px-8 py-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-semibold rounded-lg hover:from-green-700 hover:to-emerald-700 transform hover:scale-105 transition duration-200 shadow-lg flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Kirim Pendaftaran
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer Info -->
        <div class="mt-6 text-center text-gray-600 text-sm">
            <p>Pastikan semua data yang Anda masukkan sudah benar sebelum mengirim</p>
        </div>
    </div>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }

        .form-step {
            animation: fade-in 0.4s ease-out;
        }

        /* Autocomplete styling */
        .pac-container {
            font-family: inherit;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
            margin-top: 4px;
        }

        .pac-item {
            padding: 12px;
            cursor: pointer;
            border-top: 1px solid #f3f4f6;
        }

        .pac-item:hover {
            background-color: #f9fafb;
        }

        .pac-item-query {
            font-size: 14px;
            color: #1f2937;
        }
    </style>

    <script>
        let currentStep = 1;
        let autocomplete;

        // Step Navigation
        function nextStep() {
            // Validasi form step 1
            const step1Inputs = document.querySelectorAll('#step1 input[required], #step1 select[required]');
            let isValid = true;

            step1Inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('border-red-500');
                    input.classList.remove('border-gray-300');
                } else {
                    input.classList.remove('border-red-500');
                    input.classList.add('border-gray-300');
                }
            });

            if (!isValid) {
                alert('Mohon lengkapi semua field yang wajib diisi!');
                return;
            }

            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
            
            // Update progress
            document.querySelector('[data-step="1"]').classList.remove('active');
            document.querySelector('[data-step="2"]').classList.add('active');
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function prevStep() {
            document.getElementById('step2').style.display = 'none';
            document.getElementById('step1').style.display = 'block';
            
            // Update progress
            document.querySelector('[data-step="2"]').classList.remove('active');
            document.querySelector('[data-step="1"]').classList.add('active');
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Google Maps Autocomplete Implementation
        function initMap() {
            const input = document.getElementById('alamat');
            
            // Konfigurasi autocomplete
            const options = {
                componentRestrictions: { country: 'id' }, // Batasi ke Indonesia
                fields: ['formatted_address', 'geometry', 'name'],
                types: ['address'] // Hanya alamat
            };

            autocomplete = new google.maps.places.Autocomplete(input, options);

            // Event listener ketika user memilih alamat
            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();

                if (!place.geometry || !place.geometry.location) {
                    console.log("Alamat tidak valid atau tidak ditemukan");
                    return;
                }

                // Alamat yang dipilih
                const selectedAddress = place.formatted_address;
                input.value = selectedAddress;

                // Hitung jarak
                calculateDistance(place.geometry.location);
            });
        }

        // Fungsi untuk menghitung jarak
        function calculateDistance(destination) {
            // const origin = new google.maps.LatLng(3.5900177, 98.6405321); // Koordinat sekolah
            const origin = new google.maps.LatLng(3.611288858962119, 98.46343472850903);

            
            const service = new google.maps.DistanceMatrixService();
            
            service.getDistanceMatrix({
                origins: [origin],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
            }, function(response, status) {
                if (status === 'OK') {
                    const result = response.rows[0].elements[0];
                    
                    if (result.status === 'OK') {
                        const distanceText = result.distance.text;
                        const distanceValue = result.distance.value;
                        
                        // Simpan ke hidden input
                        document.getElementById('jarakText').value = distanceText;
                        document.getElementById('jarakValue').value = distanceValue;
                        
                        // Tampilkan info jarak
                        document.getElementById('distanceText').textContent = distanceText;
                        document.getElementById('distanceInfo').classList.remove('hidden');
                        
                        console.log('Jarak:', distanceText);
                    } else {
                        console.log('Tidak dapat menghitung jarak');
                    }
                } else {
                    console.log('Error:', status);
                }
            });
        }

        // Form validation enhancement
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const requiredInputs = document.querySelectorAll('input[required], select[required]');
            let isValid = true;

            requiredInputs.forEach(input => {
                if (!input.value.trim() && input.id !== 'jarakText' && input.id !== 'jarakValue') {
                    isValid = false;
                    input.classList.add('border-red-500');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang wajib diisi!');
                return false;
            }
        });

        // Update step indicator styling
        const style = document.createElement('style');
        style.textContent = `
            .step-indicator.active div:first-child {
                background: white !important;
                color: #3b82f6 !important;
            }
            .step-indicator.active span {
                color: white !important;
            }
        `;
        document.head.appendChild(style);
    </script>

    <!-- Load Google Maps API -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('API_GOOGLE') }}&libraries=places&callback=initMap">
    </script>
</body>

</html>
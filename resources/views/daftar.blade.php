<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ $favicon }}" />
    <title> {{ $title }}- TK. RAUDHATUL ATHFAL KOTA BINJAI</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')

</head>

<body class="p-10 bg-gray-100">
    <div class="max-w-4xl p-8 mx-auto bg-white rounded-md shadow-md">
        <h1 class="mb-6 text-2xl font-semibold">Form Pendaftaran</h1>

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="p-4 mb-6 text-green-800 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="p-4 mb-6 text-red-800 bg-red-100 rounded">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf
            <!-- Data Siswa -->
            <h2 class="mb-4 text-lg font-semibold ">Data Siswa</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="nama_siswa" class="block mb-2 text-sm font-medium">Nama Siswa</label>
                    <input type="text" name="nama_siswa" id="nama_siswa"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="ttl" class="block mb-2 text-sm font-medium">Tempat, Tanggal Lahir</label>
                    <input type="text" name="ttl" id="ttl"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="agama" class="block mb-2 text-sm font-medium">Agama</label>
                    <input type="text" name="agama" id="agama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="warga_negara" class="block mb-2 text-sm font-medium">Warga Negara</label>
                    <input type="text" name="warga_negara" id="warga_negara"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="jlh_saudara" class="block mb-2 text-sm font-medium">Jumlah Saudara</label>
                    <input type="number" name="jlh_saudara" id="jlh_saudara"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="anak_ke" class="block mb-2 text-sm font-medium">Anak Ke</label>
                    <input type="number" name="anak_ke" id="anak_ke"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
            </div>

            <!-- Data Orang Tua -->
            <h2 class="mt-8 mb-4 text-lg font-semibold">Data Orang Tua</h2>
            <div class="grid grid-cols-2 gap-4 mb-5">
                <div>
                    <label for="nama_ayah" class="block mb-2 text-sm font-medium">Nama Ayah</label>
                    <input type="text" name="nama_ayah" id="nama_ayah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="pendidikan_ayah" class="block mb-2 text-sm font-medium">Pendidikan Ayah</label>
                    <input type="text" name="pendidikan_ayah" id="pendidikan_ayah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="pekerjaan_ayah" class="block mb-2 text-sm font-medium">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="nama_ibu" class="block mb-2 text-sm font-medium">Nama Ibu</label>
                    <input type="text" name="nama_ibu" id="nama_ibu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="pendidikan_ibu" class="block mb-2 text-sm font-medium">Pendidikan Ibu</label>
                    <input type="text" name="pendidikan_ibu" id="pendidikan_ibu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="pekerjaan_ibu" class="block mb-2 text-sm font-medium">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="nama_wali" class="block mb-2 text-sm font-medium">Nama Wali</label>
                    <input type="text" name="nama_wali" id="nama_wali"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="pendidikan_wali" class="block mb-2 text-sm font-medium">Pendidikan
                        Wali</label>
                    <input type="text" name="pendidikan_wali" id="pendidikan_wali"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="pekerjaan_wali" class="block mb-2 text-sm font-medium">Pekerjaan Wali</label>
                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium">Alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="telp" class="block mb-2 text-sm font-medium">No. Telp/Hp</label>
                    <input type="tel" name="telp" id="telp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
            </div>
            <div class="flex justify-end">
                <a href="/"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Kembali</a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html>

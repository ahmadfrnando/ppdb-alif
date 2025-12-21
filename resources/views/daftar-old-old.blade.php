<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ $favicon }}" />
    <title>{{ $title }} - TK. RAUDHATUL ATHFAL KOTA BINJAI</title>
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
            <h2 class="mb-4 text-lg font-semibold">Data Siswa</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="nama_siswa" class="block mb-2 text-sm font-medium">Nama Siswa</label>
                    <input type="text" name="nama_siswa" id="nama_siswa"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{ old('nama_siswa') }}" required>
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
                    <label for="pendidikan_wali" class="block mb-2 text-sm font-medium">Pendidikan Wali</label>
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
                <div class="col-span-2">
                    <label for="alamat" class="block mb-2 text-sm font-medium">Alamat Lengkap</label>
                    <input type="text" name="alamat" id="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Mulai ketik alamat Anda..."
                        required />
                    <p class="mt-1 text-xs text-gray-500">💡 Mulai mengetik untuk mendapatkan saran alamat dari Google Maps</p>
                    
                    <!-- Hidden inputs untuk menyimpan data jarak -->
                    <input type="hidden" name="jarakText" id="jarakText" />
                    <input type="hidden" name="jarakValue" id="jarakValue" />
                    
                    <!-- Info jarak (akan muncul setelah alamat dipilih) -->
                    <div id="infoJarak" class="hidden mt-3 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                        <p class="text-sm text-blue-800">
                            📍 <strong>Jarak dari sekolah:</strong> <span id="jarakDisplay" class="font-semibold">-</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <a href="/"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                    Kembali
                </a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                    Kirim
                </button>
            </div>
        </form>
    </div>

    <script>
        let autocomplete;

        function initMap() {
            console.log('Google Maps API loaded successfully!');
            
            // Ambil element input alamat
            const inputAlamat = document.getElementById('alamat');
            
            // Inisialisasi Autocomplete dengan konfigurasi
            autocomplete = new google.maps.places.Autocomplete(inputAlamat, {
                componentRestrictions: { country: 'id' }, // Batasi hanya Indonesia
                fields: ['formatted_address', 'geometry', 'name'], // Data yang diambil
                types: ['address'] // Hanya tipe alamat
            });

            // Event listener saat user memilih alamat dari dropdown
            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                console.log('Place details:', place);

                // Validasi apakah place memiliki geometry
                if (!place.geometry || !place.geometry.location) {
                    console.error('Alamat tidak valid atau tidak ditemukan');
                    alert('Silakan pilih alamat dari daftar yang muncul!');
                    return;
                }

                console.log('Alamat dipilih:', place.formatted_address);
                
                // Set nilai input dengan alamat lengkap
                inputAlamat.value = place.formatted_address;

                // Hitung jarak dari sekolah
                hitungJarak(place.geometry.location);
            });
        }

        function hitungJarak(destinationLocation) {
            // Koordinat sekolah TK Raudhatul Athfal Kota Binjai
            const origin = new google.maps.LatLng(3.611288858962119, 98.46343472850903);

            // Inisialisasi Distance Matrix Service
            const service = new google.maps.DistanceMatrixService();

            // Request distance matrix
            service.getDistanceMatrix({
                origins: [origin],
                destinations: [destinationLocation],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false,
            }, function(response, status) {
                if (status === 'OK') {
                    const result = response.rows[0].elements[0];
                    
                    if (result.status === 'OK') {
                        // Ambil data jarak
                        const distanceText = result.distance.text; // Contoh: "5.2 km"
                        const distanceValue = result.distance.value; // Dalam meter: 5200

                        // Simpan ke hidden input
                        document.getElementById('jarakText').value = distanceText;
                        document.getElementById('jarakValue').value = distanceValue;

                        // Tampilkan info jarak ke user
                        document.getElementById('jarakDisplay').textContent = distanceValue;
                        document.getElementById('infoJarak').classList.remove('hidden');

                        console.log('Jarak berhasil dihitung:', distanceText);
                    } else {
                        console.error('Tidak dapat menghitung jarak. Status:', result.status);
                        alert('Maaf, tidak dapat menghitung jarak ke lokasi ini.');
                    }
                } else {
                    console.error('Error Distance Matrix API:', status);
                    alert('Terjadi kesalahan saat menghitung jarak.');
                }
            });
        }

        // Validasi form sebelum submit
        document.querySelector('form').addEventListener('submit', function(e) {
            const alamat = document.getElementById('alamat').value;
            const jarakText = document.getElementById('jarakText').value;

            // Pastikan user sudah memilih alamat dari autocomplete
            if (!jarakText) {
                e.preventDefault();
                alert('Silakan pilih alamat dari daftar saran yang muncul!');
                document.getElementById('alamat').focus();
                return false;
            }
        });
    </script>

    <!-- Load Google Maps JavaScript API -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('API_GOOGLE') }}&libraries=places&callback=initMap">
    </script>

    <style>
        /* Styling untuk dropdown autocomplete Google Maps */
        .pac-container {
            font-family: inherit;
            z-index: 9999;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid #e5e7eb;
            margin-top: 4px;
        }

        .pac-item {
            padding: 10px 12px;
            cursor: pointer;
            border-top: 1px solid #f3f4f6;
            font-size: 14px;
        }

        .pac-item:hover {
            background-color: #f9fafb;
        }

        .pac-item-query {
            color: #1f2937;
            font-weight: 500;
        }

        .pac-matched {
            font-weight: 600;
            color: #2563eb;
        }

        .pac-icon {
            margin-top: 2px;
        }
    </style>
</body>

</html>
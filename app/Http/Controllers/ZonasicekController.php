<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZonasicekController extends Controller
{
    // Koordinat sekolah yang dijadikan titik acuan
    private $schoolLatitude = "3.5900177"; // Koordinat sekolah (latitude)
    private $schoolLongitude = "98.6428281"; // Koordinat sekolah (longitude)

    // Menampilkan form input alamat
    public function showForm()
    {
        return view('zonasi.form');
    }

    // Memproses alamat dan menghitung jarak ke sekolah
    public function prosesZonasi(Request $request)
    {
        $alamat = $request->input('alamat');

        // Menggunakan Nominatim API untuk geocoding (mengubah alamat menjadi koordinat)
        $nominatimUrl = 'https://nominatim.openstreetmap.org/search?q=' . urlencode($alamat) . '&format=json&limit=1&email=your-email@example.com';
        $geoResponse = Http::get($nominatimUrl);
        // dd($geoResponse->successful());
        $distance = null; // Pastikan variabel distance didefinisikan terlebih dahulu

        if ($geoResponse->successful() && count($geoResponse->json()) > 0) {
            $latitude = $geoResponse->json()[0]['lat'];
            $longitude = $geoResponse->json()[0]['lon'];

            // Menghitung jarak dengan OpenRouteService
            $orsUrl = 'https://api.openrouteservice.org/v2/matrix/driving-car';
            $orsResponse = Http::withHeaders([
                'Authorization' => '5b3ce3597851110001cf6248d7926ba359e148e396d4d796a9d89f1c', // Masukkan API key Anda di sini
                'Content-Type' => 'application/json',
            ])->post($orsUrl, [
                'locations' => [
                    [$longitude, $latitude], // Lokasi peserta
                    [$this->schoolLongitude, $this->schoolLatitude] // Lokasi sekolah
                ],
                'metrics' => ['distance']
            ]);

            if ($orsResponse->successful()) {
                $distance = $orsResponse->json()['distances'][0][1] / 1000; // Jarak dalam kilometer

                // Menentukan status berdasarkan jarak
                if ($distance <= 3) {
                    return view('zonasi.hasil', [
                        'status' => 'Diterima',
                        'message' => 'Anda berada dalam zonasi 3km',
                        'distance' => $distance
                    ]);
                } else {
                    return view('zonasi.hasil', [
                        'status' => 'Ditolak',
                        'message' => 'Anda berada di luar zonasi 3km',
                        'distance' => $distance
                    ]);
                }
            } else {
                // Jika API OpenRouteService gagal
                return view('zonasi.hasil', ['status' => 'Error', 'message' => 'Gagal menghitung jarak', 'distance' => $distance]);
            }
        }

        // Jika alamat tidak valid atau tidak ditemukan
        return view('zonasi.hasil', ['status' => 'Error', 'message' => 'Alamat tidak valid', 'distance' => $distance]);
    }
}
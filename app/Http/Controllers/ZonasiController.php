<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZonasiController extends Controller
{
    private $schoolLatitude = 3.594462; // Koordinat sekolah (contoh)
    private $schoolLongitude = 98.3298107;

    public function prosesZonasi(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // Menghitung jarak menggunakan OpenRouteService atau formula Haversine
        $orsUrl = 'https://api.openrouteservice.org/v2/matrix/driving-car';
        $orsResponse = Http::withHeaders([
            'Authorization' => '5b3ce3597851110001cf6248d7926ba359e148e396d4d796a9d89f1c', // Masukkan API key di sini
            'Content-Type' => 'application/json',
        ])->post($orsUrl, [
            'locations' => [
                [$longitude, $latitude], // Lokasi peserta
                [$this->schoolLongitude, $this->schoolLatitude] // Lokasi sekolah
            ],
            'metrics' => ['distance']
        ]);

        if ($orsResponse->successful()) {
            $distance = $orsResponse->json()['distances'][0][1] / 1000; // Jarak dalam km

            if ($distance <= 3) {
                return view('hasil-zonasi', [
                    'status' => 'Diterima',
                    'message' => 'Anda berada dalam zonasi 3km',
                    'distance' => $distance
                ]);
            } else {
                return view('hasil-zonasi', [
                    'status' => 'Ditolak',
                    'message' => 'Anda berada di luar zonasi 3km',
                    'distance' => $distance
                ]);
            }
        } else {
            return view('hasil-zonasi', [
                'status' => 'Error',
                'message' => 'Gagal menghitung jarak: ' . $orsResponse->body()
            ]);
        }
    }
}
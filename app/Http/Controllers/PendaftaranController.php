<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Exports\PendaftaranExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Barryvdh\DomPDF\Facade\Pdf;

class PendaftaranController extends Controller
{
    // Koordinat sekolah yang dijadikan titik acuan
    private $schoolLatitude = "3.5900177"; // Koordinat sekolah (latitude)
    private $schoolLongitude = "98.6428281"; // Koordinat sekolah (longitude)

    public function index()
    {
        return view('daftar', [
            'title' => 'Home',
            'favicon' => asset('images/logo-triwuri.png')
        ]);
    }

    // public function index()
    // {
    //     return view('test', [
    //         'title' => 'Home',
    //         'favicon' => asset('images/logo-triwuri.png')
    //     ]);
    // }

    public function get_coordinates($city, $street, $province)
    {
        $address = urlencode($city . ',' . $street . ',' . $province);
        $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false®ion=Poland";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response);
        $status = $response_a->status;

        if ($status == 'ZERO_RESULTS') {
            return FALSE;
        } else {
            $return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);
            return $return;
        }
    }

    function GetDrivingDistance($lat1, $lat2, $long1, $long2)
    {
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=" . $lat1 . "," . $long1 . "&destinations=" . $lat2 . "," . $long2 . "&mode=driving&language=pl-PL";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response, true);
        $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];

        return array('distance' => $dist, 'time' => $time);
    }

    public function store(Request $request)
    {
        try {
            // Validasi data input
            $data = $request->validate([
                'nama_siswa' => 'required',
                'agama' => 'required',
                'warga_negara' => 'required',
                'jlh_saudara' => 'required',
                'ttl' => 'required',
                'anak_ke' => 'required',
                'nama_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'nama_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'nama_wali' => 'required',
                'pendidikan_wali' => 'required',
                'pekerjaan_wali' => 'required',
                'alamat' => 'required',
                'jarakText' => 'required',
                'jarakValue' => 'required',
                'telp' => 'required',
                'email' => 'required',
            ]);
            $zonasi = 'Tidak Lulus Zonasi';
            if($data['jarakValue'] <= 3000){
                $zonasi = 'Lulus Zonasi';
            }
            
            // Simpan data pendaftaran ke database dengan status zonasi dan jarak
            $dataPendaftaran = Pendaftaran::create([
                'nama_siswa' => $data['nama_siswa'],
                'agama' => $data['agama'],
                'warga_negara' => $data['warga_negara'],
                'jlh_saudara' => $data['jlh_saudara'],
                'anak_ke' => $data['anak_ke'],
                'ttl' => $data['ttl'],
                'nama_ayah' => $data['nama_ayah'],
                'pendidikan_ayah' => $data['pendidikan_ayah'],
                'pekerjaan_ayah' => $data['pekerjaan_ayah'],
                'nama_ibu' => $data['nama_ibu'],
                'pendidikan_ibu' => $data['pendidikan_ibu'],
                'pekerjaan_ibu' => $data['pekerjaan_ibu'],
                'nama_wali' => $data['nama_wali'],
                'pendidikan_wali' => $data['pendidikan_wali'],
                'pekerjaan_wali' => $data['pekerjaan_wali'],
                'alamat' => $data['alamat'],
                'telp' => $data['telp'],
                'email' => $data['email'],
                'zonasi' => $zonasi,
                'jarak' => $data['jarakValue'],
                'keterangan_jarak' => $data['jarakText']
            ]);

            $id = $dataPendaftaran->id;

            Mail::to('ando@com')->send(new MailNotify($id));

            return redirect('/pendaftaran')->with('success', 'Pendaftaran berhasil dilakukan');
        } catch (Exception $e) {
            Log::error('Error:', ['message' => $e->getMessage()]);
            return redirect('/pendaftaran')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    // public function store(Request $request)
    // {
    //     try {
    //         // Validasi data input
    //         $data = $request->validate([
    //             'nama_siswa' => 'required',
    //             'agama' => 'required',
    //             'warga_negara' => 'required',
    //             'jlh_saudara' => 'required',
    //             'ttl' => 'required',
    //             'anak_ke' => 'required',
    //             'nama_ayah' => 'required',
    //             'pendidikan_ayah' => 'required',
    //             'pekerjaan_ayah' => 'required',
    //             'nama_ibu' => 'required',
    //             'pendidikan_ibu' => 'required',
    //             'pekerjaan_ibu' => 'required',
    //             'nama_wali' => 'required',
    //             'pendidikan_wali' => 'required',
    //             'pekerjaan_wali' => 'required',
    //             'alamat' => 'required',
    //             'telp' => 'required',
    //             'email' => 'required',
    //         ]);
    //         $distance = 0.00;
    //         $status = 'Tidak Lulus Zonasi';
    //         $alamat = $data['alamat'];

    //         // Menggunakan Nominatim API untuk mendapatkan koordinat dari alamat
    //         $nominatimUrl = 'https://nominatim.openstreetmap.org/search?q=' . urlencode($alamat) . '&format=json&limit=1&email=your-email@example.com';
    //         $geoResponse = Http::withHeaders(['User-Agent' => 'MyApp/1.0 (contact@domain.com)'])->get($nominatimUrl);

    //         Log::info('Nominatim response:', $geoResponse->json()); // Logging response Nominatim

    //         if ($geoResponse->successful() && count($geoResponse->json()) > 0) {
    //             $latitude = $geoResponse->json()[0]['lat'];
    //             $longitude = $geoResponse->json()[0]['lon'];

    //             // Koordinat sekolah
    //             $schoolLatitude = 3.5900177;
    //             $schoolLongitude = 98.6428281;

    //             // Menghitung jarak dengan OpenRouteService
    //             $orsUrl = 'https://api.openrouteservice.org/v2/matrix/driving-car';
    //             $orsResponse = Http::withHeaders([
    //                 'Authorization' => '5b3ce3597851110001cf6248d7926ba359e148e396d4d796a9d89f1c',
    //                 'Content-Type' => 'application/json',
    //             ])->post($orsUrl, [
    //                 'locations' => [
    //                     [(float) $longitude, (float) $latitude],
    //                     [$schoolLongitude, $schoolLatitude]
    //                 ],
    //                 'metrics' => ['distance']
    //             ]);

    //             Log::info('ORS response:', $orsResponse->json()); // Logging response OpenRouteService

    //             if ($orsResponse->successful()) {
    //                 $distance = $orsResponse->json()['distances'][0][1] / 1000;

    //                 $status = ($distance <= 3) ? 'Lulus Zonasi' : 'Tidak Lulus Zonasi';
    //             } else {
    //                 Log::error('OpenRouteService error:', $orsResponse->json());
    //                 return redirect('/pendaftaran')->with('error', 'Gagal menghitung jarak');
    //             }
    //         } else {
    //             Log::error('Nominatim error: Alamat tidak ditemukan atau tidak valid.');
    //             return redirect('/pendaftaran')->with('error', 'Alamat tidak valid');
    //         }
    //         // Simpan data pendaftaran ke database dengan status zonasi dan jarak
    //         $dataPendaftaran = Pendaftaran::create([
    //             'nama_siswa' => $data['nama_siswa'],
    //             'agama' => $data['agama'],
    //             'warga_negara' => $data['warga_negara'],
    //             'jlh_saudara' => $data['jlh_saudara'],
    //             'anak_ke' => $data['anak_ke'],
    //             'ttl' => $data['ttl'],
    //             'nama_ayah' => $data['nama_ayah'],
    //             'pendidikan_ayah' => $data['pendidikan_ayah'],
    //             'pekerjaan_ayah' => $data['pekerjaan_ayah'],
    //             'nama_ibu' => $data['nama_ibu'],
    //             'pendidikan_ibu' => $data['pendidikan_ibu'],
    //             'pekerjaan_ibu' => $data['pekerjaan_ibu'],
    //             'nama_wali' => $data['nama_wali'],
    //             'pendidikan_wali' => $data['pendidikan_wali'],
    //             'pekerjaan_wali' => $data['pekerjaan_wali'],
    //             'alamat' => $alamat,
    //             'telp' => $data['telp'],
    //             'email' => $data['email'],
    //             'zonasi' => $status,
    //             'jarak' => $distance,
    //         ]);

    //         $id = $dataPendaftaran->id;

    //         Mail::to('ando@com')->send(new MailNotify($id));

    //         return redirect('/pendaftaran')->with('success', 'Pendaftaran berhasil dilakukan');
    //     } catch (Exception $e) {
    //         Log::error('Error:', ['message' => $e->getMessage()]);
    //         return redirect('/pendaftaran')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }

    // public function mail($id)
    // {
    //     $data = Pendaftaran::find($id);

    //     return view('pendaftaran-pdf', compact('data'));
    // }
}

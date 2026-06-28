<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {   
        $pengumuman = Pengumuman::paginate(6);
        $title = 'Pengumuman';
        $favicon = asset('images/logo-triwuri.png');
        return view('pengumuman', compact('pengumuman', 'title', 'favicon'));
    }

    public function detail(Request $request, int $id)
    {
        $pengumuman = Pengumuman::find($id);
        $siswas = $pengumuman->schedule->siswas()->get();
        $title = 'Pengumuman';
        $favicon = asset('images/logo-triwuri.png');
        return view('pengumuman-detail', compact('pengumuman', 'siswas', 'title', 'favicon'));
    }
}

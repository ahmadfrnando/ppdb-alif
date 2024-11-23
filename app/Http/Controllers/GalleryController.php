<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {   
        $gallery = Gallery::paginate(9);

        $gallery->map(function ($item) {
            $item->foto = '/storage/' . $item->foto;
            return $item;
        });
        return view('gallery', [
            'gallery' => $gallery,
            'title' => 'Gallery',
            'favicon'=> asset('images/logo-triwuri.png')
        ]);
    }
}

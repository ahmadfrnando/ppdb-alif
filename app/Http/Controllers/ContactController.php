<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
        $title = "Contact";
        $favicon = asset('images/logo-triwuri.png');
        return view('contact', compact('title', 'favicon'));
    }
    
    public function kirim(Request $request)
    {   
        try {
            $request->validate([
                'nama_pengirim' => 'required',
                'email_pengirim' => 'required',
                'pesan' => 'required',
            ]);

            Contact::create([
                'nama_pengirim' => $request->nama_pengirim,
                'email_pengirim' => $request->email_pengirim,
                'pesan' => $request->pesan
            ]);
            return redirect()->back()->with('success', 'Pesan Anda Telah Dikirim');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pesan Anda Tidak Dikirim');
        }
    }
}

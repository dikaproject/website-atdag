<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'komentar' => 'required',
        ]);

        Komentar::create($validatedData);

        return redirect('/')->with('success', 'Komentar berhasil ditambahkan.');
        // Atau return redirect()->route('nama_route_halaman_utama'); jika punya named route
    }
}

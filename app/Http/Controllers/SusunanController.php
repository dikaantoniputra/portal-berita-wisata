<?php

namespace App\Http\Controllers;

use App\Models\Susunan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SusunanController extends Controller
{
    //
    public function index()
    {
        $foto = Susunan::all();
        return view('admin.page.konten.view', compact('foto'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Delete all records from the "Susunan" table
        Susunan::truncate();
    
        // Simpan data ke database
        $company = new Susunan;
    
        // Fungsinya untuk menyimpan gambar pada tabel file_kegiatan
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename);
            $company->gambar = 'storage/images/' . $filename;
        }
    
        $company->save();
        return redirect()->route('susunan.index')->with('success', 'Data pengumuman berhasil diperbarui.');
    }
    
}

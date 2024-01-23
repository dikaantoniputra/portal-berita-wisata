<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\FileKegiatan;
use Illuminate\Http\Request;
use App\Models\CommentKegiatan;
use App\Models\CategoryKegiatan;
use App\Http\Controllers\Controller;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kegiatankategori = CategoryKegiatan::all();
        $kegiatan = Kegiatan::all();

      

        return view('index', compact('kegiatankategori','kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        $filekegiatan = FileKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        $commen = CommentKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        return view('detail', compact('kegiatan','filekegiatan','commen'));
    }

}

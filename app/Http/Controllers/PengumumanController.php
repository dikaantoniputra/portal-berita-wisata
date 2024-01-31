<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FilePengumuman;

use App\Models\CommetPengumuman;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;



class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'pengumuman';
            return Datatables::of(Pengumuman::with(['user']))
            
        // ->addIndexColumn()
                     ->addColumn('action', function ($object) use ($model) {
                        $text = "";
                        
                        $text.= '<a href="'.route($model.'.edit', [$model => $object]).'" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                         <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                         <path d="M16 5l3 3"></path>
                         </svg> Edit</a>';
                         $text.= ' <a href="'.route($model.'.destroy', [$model => $object]).'" class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i> Hapus</a>';
                         $text.= '<a href="'.route($model.'.show', [$model => $object]).'" class="btn btn-sm btn-primary">Show</a>';
                         return $text;
                          })   

                        

                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);

        }
       
       return view('admin.page.pengumuman.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.page.pengumuman.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'file_pengumumen.*' => 'file|max:2048', // Add validation rule for each file
        ]);

        // Mendapatkan ID user yang sedang login
        $id_user = Auth::id();

        // Membuat slug secara acak
        $slug = Str::random(10);

        // Menyimpan data ke database
        $company = new Pengumuman;
        $company->judul = $request->judul;
        $company->deskripsi = $request->deskripsi;
        $company->slug = $slug;
        $company->user_id = $id_user;


     

        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $logoFile = $request->file('gambar');
            $logoFileName = 'gambar' . time() . '.' . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path('uploads/'), $logoFileName);
            $company->gambar = $logoFileName;
        }

        $company->save();

        if ($request->hasFile('file_pengumumen')) {
            foreach ($request->file('file_pengumumen') as $file) {
                $nama_file = $file->getClientOriginalName();
                $path = $file->store('public/gambar');

                $fileMateri = new FilePengumuman;
                $fileMateri->pengumuman_id = $company->id;
                $fileMateri->nama_file = $nama_file;
                $fileMateri->lokasi_file = 'storage/' . substr($path, 7);
                $fileMateri->save();
            }
        }

      

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('pengumuman.index')->with('success', 'Data perusahaan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::select('*')->findOrFail($id);
        $fileMateri = FilePengumuman::where('pengumuman_id', $pengumuman->id)->get();
        $commen = CommetPengumuman::where('pengumuman_id', $pengumuman->id)->get();
        return view('admin.page.pengumuman.show', compact('pengumuman','fileMateri','commen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::select('*')->findOrFail($id);
        $fileMateri = FilePengumuman::where('pengumuman_id', $pengumuman->id)->get();

        return view('admin.page.pengumuman.edit',compact('pengumuman','fileMateri'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $pengumuman = Pengumuman::findOrFail($id);

        // Check if the user is authorized to update the pengumuman
        if ($pengumuman->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $pengumuman->judul = $request->judul;
        $pengumuman->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $logoFile = $request->file('gambar');
            $logoFileName = 'gambar' . time() . '.' . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path('uploads/'), $logoFileName);
            $pengumuman->gambar = $logoFileName;
        }

        $pengumuman->save();

        if ($request->hasFile('file_pengumumen')) {
            foreach ($request->file('file_pengumumen') as $file) {
                $nama_file = $file->getClientOriginalName();
                $path = $file->store('public/gambar');

                $fileMateri = new FilePengumuman;
                $fileMateri->pengumuman_id = $pengumuman->id;
                $fileMateri->nama_file = $nama_file;
                $fileMateri->lokasi_file = 'storage/' . substr($path, 7);
                $fileMateri->save();
            }
        }

        return redirect()->route('pengumuman.index')->with('success', 'Data pengumuman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        // Check if the user is authorized to delete the pengumuman
        if ($pengumuman->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Data pengumuman berhasil dihapus.');
    }

    public function delete($id)
    {
        // Temukan pengalaman kerja berdasarkan ID
        $workExperience = FilePengumuman::findOrFail($id);

        // Lakukan proses penghapusan
        $workExperience->delete();

        // Redirect atau lakukan tindakan lain setelah penghapusan berhasil
        return redirect()->back()->with('success', 'Pengalaman kerja telah dihapus.');
    }


    public function pengumuman(Request $request)
    {
       
        $judul = $request->input('judul');

       
        $pengumuman = Pengumuman::query();
    
        if ($judul) {
            $pengumuman->where('judul', 'like', '%' . $judul . '%');
        }

    
        $commen = CommetPengumuman::all();
        $pengumuman = $pengumuman->paginate(6);
        $currentPage = $pengumuman->currentPage();
 
        return view('pengumuman',[
            'pengumuman' => $pengumuman,
            'currentPage' => $currentPage,
            'commen' => $commen
        ]);
    }

    public function detail($slug)
    {
       

        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        $filepengumuman = FilePengumuman::where('pengumuman_id', $pengumuman->id)->get();
        $commen = CommetPengumuman::where('pengumuman_id', $pengumuman->id)->get();
        return view('detailpengumuman', compact('pengumuman','filepengumuman','commen'));
    }


    
}

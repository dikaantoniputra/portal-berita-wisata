<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Str;
use App\Models\FileKegiatan;
use Illuminate\Http\Request;

use App\Models\CommentKegiatan;
use App\Models\CategoryKegiatan;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'kegiatan';
            return Datatables::of(Kegiatan::with(['user','company']))
            
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
       
       return view('admin.page.kegiatan.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = CategoryKegiatan::all();
        return view('admin.page.kegiatan.create',compact('category'));
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
            'category_kegiatan_id' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Mendapatkan ID user yang sedang login
        $id_user = Auth::id();
    
        // Membuat slug secara acak link url
        $slug = Str::random(10);
    
        // Simpan data ke database
        $company = new Kegiatan;
        $company->category_kegiatan_id = $request->category_kegiatan_id;
        $company->user_id = $id_user;
        $company->judul = $request->judul;
        $company->slug = $slug;
        $company->deskripsi = $request->deskripsi;
        
        //fungsinya untuk menyimpan gambar pada tabel file_kegiatan
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename);
            $company->gambar = 'storage/images/' . $filename;
        }
    
        $company->save();


        if ($request->hasFile('file_kegiatans')) {
            foreach ($request->file('file_kegiatans') as $file) {
                $nama_file = $file->getClientOriginalName();
                $path = $file->store('public/gambar');

                $fileMateri = new FileKegiatan;
                $fileMateri->kegiatan_id = $company->id;
                $fileMateri->nama_file = $nama_file;
                $fileMateri->lokasi_file = 'storage/' . substr($path, 7);
                $fileMateri->save();
            }
        }

      


    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('kegiatan.index')->with('success', 'Data pengumuman berhasil diperbarui.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::select('*')->findOrFail($id);
        $fileMateri = FileKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        $commen = CommentKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        return view('admin.page.kegiatan.show', compact('kegiatan','fileMateri','commen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kegiatan = Kegiatan::select('*')->findOrFail($id);
        $category = CategoryKegiatan::all();
        $fileMateri = FileKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        return view('admin.page.kegiatan.edit',compact('kegiatan','category','fileMateri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_kegiatan_id' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Mendapatkan ID user yang sedang login
        $id_user = Auth::id();
    
        // Cari data kegiatan berdasarkan ID
        $kegiatan = Kegiatan::findOrFail($id);
    
        // Update data kegiatan
        $kegiatan->category_kegiatan_id = $request->category_kegiatan_id;
        $kegiatan->user_id = $id_user;
        $kegiatan->deskripsi = $request->deskripsi;
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename);
            $kegiatan->gambar = 'storage/images/' . $filename;
        }
    
        $kegiatan->save();


        
        if ($request->hasFile('file_kegiatans')) {
            foreach ($request->file('file_kegiatans') as $file) {
                $nama_file = $file->getClientOriginalName();
                $path = $file->store('public/gambar');

                $fileMateri = new FileKegiatan;
                $fileMateri->kegiatan_id = $kegiatan->id;
                $fileMateri->nama_file = $nama_file;
                $fileMateri->lokasi_file = 'storage/' . substr($path, 7);
                $fileMateri->save();
            }
        }
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cari data kegiatan berdasarkan ID
        $kegiatan = Kegiatan::findOrFail($id);
    
        // Hapus file gambar jika ada
        if ($kegiatan->gambar) {
            Storage::delete($kegiatan->gambar);
        }
    
        // Hapus data kegiatan
        $kegiatan->delete();
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil dihapus.');
    }

    public function delete($id)
    {
        // Temukan pengalaman kerja berdasarkan ID
        $workExperience = FileKegiatan::findOrFail($id);

        // Lakukan proses penghapusan
        $workExperience->delete();

        // Redirect atau lakukan tindakan lain setelah penghapusan berhasil
        return redirect()->back()->with('success', 'Pengalaman kerja telah dihapus.');
    }

    


    public function kegiatan(Request $request)
    {
        $category = CategoryKegiatan::all();

    
        $pilihan = $request->input('judul');

        $kegiatan = Kegiatan::query();

        if ($pilihan) {
            $kegiatan->where('category_kegiatan_id', $pilihan);
        }
        


        $kegiatan = $kegiatan->paginate(6);
        $currentPage = $kegiatan->currentPage();

        return view('kegiatan', [
            'kegiatan' => $kegiatan,
            'category' => $category,
            'currentPage' => $currentPage
        ]);
    }

public function detail($slug)
    {
       
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        $filekegiatan = FileKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        $commen = CommentKegiatan::where('kegiatan_id', $kegiatan->id)->get();
        return view('detailkegiatan', compact('kegiatan','filekegiatan','commen'));
    }



    
}

<?php

namespace App\Http\Controllers;

use App\Models\CategoryKegiatan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'category';
            return Datatables::of(CategoryKegiatan::with(['user']))
            
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
                         return $text;
                          })   

                        

                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);

        }
       
       return view('admin.page.category.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.page.category.create');
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
            'name' => 'required',
            // Tambahkan validasi untuk kolom lain jika diperlukan
        ]);

        $id_user = Auth::id();

        // Membuat slug secara acak
       
    
        // Simpan data ke database
        $company = new CategoryKegiatan;
        $company->name = $request->name;
        $company->user_id = $id_user;
        // Setel nilai kolom lain jika ada
    
        $company->save();
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('category.index')->with('success', 'Data Category berhasil disimpan.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryKegiatan  $categoryKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryKegiatan $categoryKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryKegiatan  $categoryKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryKegiatan = CategoryKegiatan::select('*')->findOrFail($id);
        return view('admin.page.category.edit',compact('categoryKegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryKegiatan  $categoryKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            // Tambahkan validasi untuk kolom lain jika diperlukan
        ]);
    
        $category = CategoryKegiatan::findOrFail($id);
    
        $category->name = $request->name;
        // Setel nilai kolom lain jika ada
    
        $category->save();
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('category.index')->with('success', 'Data Category berhasil diperbarui.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryKegiatan  $categoryKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryKegiatan::findOrFail($id);
    
        $category->delete();
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('category.index')->with('success', 'Data Category berhasil dihapus.');
    }
    
}

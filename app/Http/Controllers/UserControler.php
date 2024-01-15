<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $model = 'user';
            return Datatables::of(User::select(['*']))
            
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
       
       return view('admin.page.user.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.page.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // Simpan data ke database
        $perusahaan = new User();
        $perusahaan->username = $request->input('username');
        $perusahaan->password = bcrypt($request->input('password'));
        // Jika ada lebih banyak kolom yang perlu disimpan, tambahkan di sini
        $perusahaan->save();
    
        // Redirect ke halaman yang diinginkan setelah penyimpanan data berhasil
        return redirect()->route('user.index')->with('success', 'Data perusahaan berhasil disimpan.');
    }    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::select('*')->findOrFail($id);
        return view('admin.page.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // Temukan data perusahaan berdasarkan ID
        $perusahaan = User::findOrFail($id);
    
        // Perbarui data perusahaan dengan input baru
        $perusahaan->username = $request->input('username');
        $perusahaan->password = bcrypt($request->input('password'));
        // Jika ada lebih banyak kolom yang perlu diperbarui, tambahkan di sini
    
        // Simpan perubahan ke database
        $perusahaan->save();
    
        // Redirect ke halaman yang diinginkan setelah pembaruan data berhasil
        return redirect()->route('user.index')->with('success', 'Data perusahaan berhasil diperbarui.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan data perusahaan berdasarkan ID
        $perusahaan = User::findOrFail($id);
    
        // Hapus data perusahaan dari database
        $perusahaan->delete();
    
        // Redirect ke halaman yang diinginkan setelah penghapusan data berhasil
        return redirect()->route('user.index')->with('success', 'Data perusahaan berhasil dihapus.');
    }
    
}

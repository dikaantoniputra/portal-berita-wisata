<?php


use App\Models\User;
use App\Models\Susunan;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\CategoryKegiatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SusunanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\CommentKegiatanController;
use App\Http\Controllers\CategoryKegiatanController;
use App\Http\Controllers\CommetPengumumanController;
use App\Http\Controllers\WisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

Route::get('/', function () {
    $pengumuman = Pengumuman::count();
    $Kegiatan = Kegiatan::count();
    $User = User::count();
    $CategoryKegiatan = CategoryKegiatan::count();
    
    return view('admin.page.index',compact('CategoryKegiatan','User','Kegiatan','pengumuman'));
})->name('admin');

Route::resource('pengumuman', PengumumanController::class);

Route::resource('kegiatan', KegiatanController::class);

Route::resource('category', CategoryKegiatanController::class);

Route::resource('user', UserControler::class);
Route::delete('/file/{id}', [PengumumanController::class, 'delete'])->name('pengumuman.delete');

Route::delete('/filekegiatan/{id}', [KegiatanController::class, 'delete'])->name('kegiatan.delete');

Route::resource('susunan', SusunanController::class);

Route::get('/comment/delete/{id}', [CommetPengumumanController::class, 'destroy'])->name('deleteComment');

Route::get('/comment2/delete/{id}', [CommentKegiatanController::class, 'destroy'])->name('deleteCommentKegiatan');



// Route::get('/comment/delete/{id}', [CommentKegiatanController::class, 'destroy'])->name('deleteCommentKegiatan');


});



Route::get('/', [WisataController::class, 'index'])->name('index');


// web.php or routes.php (depending on your Laravel version)
Route::get('/category/{id}', [KegiatanController::class, 'category'])->name('category');
Route::get('kegiatanetails/{slug}', [WisataController::class, 'detail'])->name('kegiatanetails');

// Route::get('detail', function () {
//     return view('detail');
// })->name('detail');

Route::get('berita-all', [PengumumanController::class, 'pengumuman'])->name('pengumuman');
Route::get('berita/{slug}', [PengumumanController::class, 'detail'])->name('pengumumanetails');
Route::get('/searchpengumuman',  [PengumumanController::class, 'pengumuman'])->name('searchpengumuman');

// 

Route::get('daftar', function () {
    return view('daftar');
})->name('daftar');


// Route::get('susunan', function () {
//     $foto = Susunan::all();
//     return view('susunan',compact('foto'));
// })->name('susunan');

// Route::get('pengumuman-all', [PengumumanController::class, 'pengumuman'])->name('pengumuman');
// Route::get('pengumuman/{slug}', [PengumumanController::class, 'detail'])->name('pengumumanetails');
// Route::get('/searchpengumuman',  [PengumumanController::class, 'pengumuman'])->name('searchpengumuman');



Route::get('/searchkegiatan',  [PengumumanController::class, 'kegiatan'])->name('searchkegiatan');


// Route::resource('commentspengumuman', CommetPengumumanController::class);

// Route::resource('commentskegiatan', CommentKegiatanController::class);
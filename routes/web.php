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



Route::get('/', [AuthController::class, 'index'])->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('susunan', function () {
    $foto = Susunan::all();
    return view('susunan',compact('foto'));
})->name('susunan');

Route::get('pengumuman-all', [PengumumanController::class, 'pengumuman'])->name('pengumuman');
Route::get('pengumuman/{slug}', [PengumumanController::class, 'detail'])->name('pengumumanetails');
Route::get('/searchpengumuman',  [PengumumanController::class, 'pengumuman'])->name('searchpengumuman');


Route::get('kegiatan-all', [KegiatanController::class, 'kegiatan'])->name('kegiatan');
Route::get('kegiatan/{slug}', [KegiatanController::class, 'detail'])->name('kegiatanetails');
Route::get('/searchkegiatan',  [PengumumanController::class, 'kegiatan'])->name('searchkegiatan');


Route::resource('commentspengumuman', CommetPengumumanController::class);

Route::resource('commentskegiatan', CommentKegiatanController::class);
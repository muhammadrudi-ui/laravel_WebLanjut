<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\QBProdukController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;



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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/show/{id?}',function($id=1) {echo "Nilai Parameter Adalah ".$id;
//});

Route::get('/edit/{name}',function ($nama) {
    echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/index',function(){
    echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

Route::get('/create',function(){
    echo "Route diakses menggunakan nama";
})->name('create');

Route::get('tampil/{nama}', function ($nama) {
    return "hai nama saya adalah ". $nama;
});

Route::get('/produk',[ProdukController::class,'index']);

Route::get('/produk/show',[ProdukController::class,'show']);

Route::get('/main',function(){
    $title = 'layout Laravel';
    $konten = 'Tugas Layout Muhammad Rudi';
    return view('konten.main',compact('title','konten'));
});

Route::resource('produk', ProdukController::class);

//elequent QB ORM
Route::get('/show',[QBProdukController::class,'show_eloquent']);
Route::get('/insert',[QBProdukController::class,'insert_eloquent']);
Route::get('/update',[QBProdukController::class,'update_eloquent']);

//UTS CRUD Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// untuk verifikasi email user
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function () {
        Route::resource('editor', EditorController::class);
    });
});

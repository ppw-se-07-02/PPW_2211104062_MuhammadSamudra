<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//1
Route::get('/', function () {
    return view('welcome');
});

//2
Route::get('/beranda', function () {
    return 'Halaman Beranda';
});

//3
// Route::get('/kendaraan/{jenis}', function ($jenis) {
//     return "Tampilkan data kendaraan dengan jenis $jenis";
// });

//4
Route::get('/kendaraan/{jenis?}/{merek?}',
    function ($a = 'motor',$b = 'honda') {
    return "Cek harga kendaraan $a $b";
});

//5
Route::get('/product/{id}', function ($id) {
    return "Tampilkan product dengan id = $id";
}) ;//->where('id', '[0-9]+');

//6
Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact-us', '/hubungi-kami');

//7
Route::prefix('/admin')->group(function() {
    Route::get('/dashboard', function() {
        return 'Tampilkan dashboard aplikasi';
    });
    Route::get('/datapegawai', function() {
        return 'Tampilkan data pegawai';
    });
    Route::get('/datamahasiswa', function() {
        return 'Tampilkan data mahasiswa';
    });
});

//8
Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

//9
Route::get('/baju/1', function () {
    return "Baju ke-1";
});
Route::get('/baju/1', function () {
    return "Baju ke-1 lagi";
});
Route::get('/baju/1', function () {
    return "Baju ke-1 lagi lagii";
});


Route::get('/celana/{a}', function ($a) {
    return "Celana ke-$a";
});
Route::get('/celana/{b}', function ($b) {
    return "Celana ke-$b lagi";
});
Route::get('/celana/{c}', function ($c) {
    return "Celana ke-$c lagi lagi";
});

Route::get('/umahasiswa', function () { 
    return view('universitas.mahasiswa');
});

Route::get('/mahasiswa1', function () {
    $arrMhs = ["Abdul hafidz","Aufar Bintang",
               "Muhammad Nur Hamada","Hastin Ajeng"];
    return view('mahasiswa1')->with('mahasiswa', $arrMhs);
});

Route::get('/produk', function () {
    $arrProduk = [
    "prod1" => "Televisi",
    "prod2" => "Kipas Angin",
    "prod3" => "Radio"
    ];
    return view('produk', $arrProduk);
});

use App\Http\Controllers\PageController;

Route::get('/awal', [PageController::class,'index']);
Route::get('/tampilmhs',[PageController::class,'tampil']);

Route::get('/ug2', function (){
    return view('unguided2');
});

Route::get('/mahasiswa', function () {
    $nilai = [80,64,30,76,95];
    return view('mahasiswa',['nilai' => $nilai]);
});

Route::get('/ug4', [App\Http\Controllers\Unguided4::class,'index']);

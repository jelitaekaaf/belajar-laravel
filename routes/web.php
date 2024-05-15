<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Telepon;
use App\Models\Produk;
use App\Models\Merk;
use App\Models\Pembeli;
use App\Models\Barang2;
use App\Models\Transaksi;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerkController;



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

// route basic
Route:: get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di wedapp saya <br>'
        . 'Laravel, emang keren.';
});

// buat route basic passing data to view
Route:: get('/animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route:: get('/vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

// route parameter
Route:: get('product/{name}', function ($name) {
    return "produk: $name";
});

// latihan 
Route:: get('myself/{name}/{bb}/{tb}', function ($a, $berat, $tinggi) {
    $bmi = $berat / (($tinggi / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    }elseif ($bmi > 25) {
        $ket = "Kelebihan";
    }elseif ($bmi >18.5) {
        $ket = "Ideal";
    }elseif ($bmi < 18.5) {
        $ket = "Kekurangan Berat Badan";    
    }

    return "Nama  = $a<br>".
           "Berat Badan = $berat<br>".
           "Tinggi Badan = $tinggi<br>".
           "Nilai BMI = $bmi<br>".
           "Keterangan = $ket";

});

// route optional parameter -> ditandai dengan ? 
Route:: get('myname/{nama?}', function ($a = "Jelita") {
    return "my name is $a"; 
});

//menampilkan data dr database
//Route::get('/testmodel', function () {
//    $data = Post::all();
//    return $data;
//});

//menampilkan data barang dr database
Route::get('/produk', function () {
    $produk = Produk::all();  //menampilkan semua data

    return view('tampil_produk', compact('produk'));

    // $post = Post::all(); //menampilkan semua data

     //$siswas = Post::find(5); //menampilkan data berdasarkan id

    //$post = Post::where('alamat', 'like', '%Cibaduyut%')->get(); // menampilkan berdasarkan title

    // tambah data
     //$siswas = new Siswa;
     //$siswas->nama = "Cara Menjadi";
     //$siswas->jk = "Laki laki";
     //$siswas->alamat = "Cibaduyut";
     //$siswas->agama = "Islam";
     //$siswas->telepon = "0987656";
     //$siswas->email = "a@gmail.com";
     //$siswas->save(); 
   
});

Route::get('/merk', function () {
    $merk = Merk::all();  //menampilkan semua data

    return view('tampil_merk', compact('merk'));
});

Route::get('/pembeli', function () {
    $pembeli = Pembeli::all();  

    return view('tampil_pembeli', compact('pembeli'));
});

Route::get('/barang2', function () {
    $barang2 = Barang2::all(); 

    return view('tampil_barang2', compact('barang2'));
});

Route::get('/transaksi', function () {
    $transaksi = Transaksi::all();  

    return view('tampil_transaksi', compact('transaksi'));
});

Route::get('/template', function () {
  
    return view('template');
});

Route::get('/template2', function () {
  
    return view('template2');
});

//Route::get('/template2', function () {
  //  $produks = Produk::all();  
    
   // return view('template2', compact('produks'));
//});

//controller
Route::get('produk', [ProdukController::class,'menampilkan']); // menampilkan semua data
Route::get('produk/{id}', [ProdukController::class,'show']);    // menampilkan by id

Route::get('post', [PostController::class,'menampilkan']);
Route::get('post/{id}', [PostController::class,'show']);

Route::get('merk', [MerkController::class,'menampilkan']);
Route::get('merk/{id}', [MerkController::class,'show']);

// login laravel
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// crud brand
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);   // sudah sepaket crud
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;

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
Route::get('/testmodel', function () {
    $data = Barang::all();
    return $data;
});
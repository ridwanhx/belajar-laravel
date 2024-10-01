<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// belajar mengenai route
// 1. Dasar - route sederhana dengan closure
Route::get('/hello', function() {   // untuk setiap url yang mengarah ke /hello
    // kembalikan nilai berikut
    return 'Hello World!';
});

// 2. Semi Menengah - route dengan parameter dinamis
Route::get('/user/{name}', function($name) {    // untuk url yang mengarah ke /user dengan mengikutsertakan satu buah nilai setelahnya (nilai tersebut diasumsikan sebagai name), yang kemudian nantinya nilai tersebut akan menjadi parameter didalm fungsi yang akan dijalankan
    // kembalikan nilai berikut, serta tampilkan juga nilai dari parameter ke layar
    return "Hello, $name";
});

// 3. Menengah
// membuat route yang diharuskan mengirimkan beberapa parameter
Route::get('/product/{category}/{id}', function($category, $id) {
    return "Product ID: $id in Category: $category";
});

// 4. Menengah ke atas dikit
// Membuat route dengan parameter yang bersifat opsional / jika pengguna tidak menuliskan parameter, akan ada nilai default yang mengisinya
Route::get('/greetings/{nama?}', function($nama = 'admin') {
    return "Selamat datang, $nama";
});

// 5. Menengah agak atas
// untuk memastikan parameter hanya menerima input tertentu, kita bisa menambahkan klausa constraint menggunakan regular expression
Route::get('/angka/{num}', function($num) {
    return "Angka: $num";
})->where('num', '[0-9]+');  // memastikan bahwa parameter yang dikirimkan hanya berupa angka/numerik

// 6. Menengah ke atas
// inisialisasi rute / memberi inisialisasi nama pada rute
// sehingga nantinya misal untuk pemanggilan rute ini pada href, bisa cukup tuliskan saja langsung nama rute nya, tidak perlu lagi pakai awalan /
Route::get('/home', [Home::class, 'index'])->name('home');

Route::get('/about', [About::class, 'index'])->name('about');
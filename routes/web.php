<?php

// panggil semua controller yang digunakan
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TampilanberitaController;
use App\Http\Controllers\DetailednewsController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\TampilanaboutController;

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TampilangalleryController;

use App\Http\Controllers\KontakController;
use App\Http\Controllers\TampilankontakController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     TampilanberitaController::class;
//     return view('userpage.home');
// });

// USER
Route::get('/', [App\Http\Controllers\TampilanberitaController::class, 'home'])->name('userpage.home');

Route::get('/news', [App\Http\Controllers\TampilanberitaController::class, 'berita'])->name('userpage.news');

Route::resource('/detailednews', DetailednewsController::class);

Route::get('/aboutus', [App\Http\Controllers\TampilanaboutController::class, 'about'])->name('userpage.about');

Route::get('/gallery', [App\Http\Controllers\TampilangalleryController::class, 'gallery'])->name('userpage.gallery');

Route::resource('/contact', TampilankontakController::class);


// ADMIN
Auth::routes(['login' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/berita', BeritaController::class)->middleware('auth'); 

Route::resource('/about', AboutController::class)->middleware('auth'); 

Route::resource('/galeri', GalleryController::class)->middleware('auth'); 

Route::resource('/kontak', KontakController::class)->middleware('auth'); 
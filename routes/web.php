<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Berita;
use App\Models\Category;
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

Route::get('/', function () {
    return view('index', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "active" => "Contact"
    ]);
});

//halaman all post
Route::get('/berita', [BeritaController::class, 'index']);
// hlaman singel post
Route::get('/blogberita/{berita:slug}', [BeritaController::class, 'show']);

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('berita', [
//         'title' => "Berita #$category->name",
//         'beritas' => $category->beritas->load('category', 'user'),
//         'category' => $category->name,
//     ]);
// });

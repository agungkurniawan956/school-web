<?php


use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DashboardAgendaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// frontend
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        // "active" => "Contact"
    ]);
});

Route::resource('/contact', ContactusController::class)->only('create', 'store');

//halaman all post frontend
Route::get('/berita', [BeritaController::class, 'index']);
// hlaman singel post frontend
Route::get('/blogberita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/informasi/agenda', [AgendaController::class, 'index']);
Route::get('/informasi/agenda/{agenda:slug}', [AgendaController::class, 'show']);

//backend
Route::get('/dashboard', function () {
    return view('backend.index', [
        "title" => "Dashboard",
    ]);
})->middleware('auth');

Route::get('/dashboard/beritas/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/beritas', DashboardBeritaController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show', 'destroy')->middleware('admin');

Route::get('/dashboard/agenda/checkSlug', [DashboardAgendaController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/agenda', DashboardAgendaController::class)->middleware('auth');

Route::resource('/dashboard/contact', DashboardContactController::class)->only('index', 'show', 'destroy')->middleware('admin');

Route::resource('/dashboard/gallery', DashboardGalleryController::class)->middleware('admin');

Route::resource('/dashboard/user', UserController::class)->middleware('admin');





















// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('berita', [
//         'title' => "Berita #$category->name",
//         'beritas' => $category->beritas->load('category', 'user'),
//         'category' => $category->name,
//     ]);
// });

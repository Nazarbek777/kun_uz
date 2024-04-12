<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
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


Route::get('/', [\App\Http\Controllers\NewsController::class, 'news'])->name('news');;
Route::get('/toshkent', [\App\Http\Controllers\NewsController::class, 'toshkent'])->name('toshkent');
Route::get('/uzb', [\App\Http\Controllers\NewsController::class, 'uzb'])->name('uzb');
Route::get('/show-news/{id}', [\App\Http\Controllers\NewsController::class, 'showNews'])->name('show-news');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/index', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
    Route::get('/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
    Route::post('/store', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
    Route::get('/show/{id}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
    Route::get('edit/{id}', [\App\Http\Controllers\NewsController::class,'edit'])->name('news.edit');
    Route::put('edit/{id}', [\App\Http\Controllers\NewsController::class,'update'])->name('news.update');
    Route::delete('destroy/{id}', [\App\Http\Controllers\NewsController::class,'destroy'])->name('news.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

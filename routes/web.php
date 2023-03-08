<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/product')->group(function () {
    Route::get('/makanan', [App\Http\Controllers\ProductController::class, 'makanan'])->name('makanan');

    Route::get('/minuman', [App\Http\Controllers\ProductController::class, 'minuman'])->name('minuman');
});

Route::get('/news/{links?}', [App\Http\Controllers\NewsController::class, 'news'])->name('news');


Route::prefix('/program')->group(function(){
    Route::get('/healty', [App\Http\Controllers\ProgramController::class, 'program1'])->name('healty');

    Route::get('/happy', [App\Http\Controllers\ProgramController::class, 'program2'])->name('happy');
});

Route::get('/aboutUs', [App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('aboutUs');


Route::resource('/contactUs', ContactUsController::class, ['names' => ['index' => 'contactUs']]);
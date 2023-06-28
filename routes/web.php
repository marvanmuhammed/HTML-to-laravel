<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/w', function () {
    return view('welcome');
});





Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/index', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/testimonial', [MainController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/chocolate', [MainController::class, 'chocolate'])->name('chocolate');
Route::post('/contact', [MainController::class, 'insertData'])->name('contact');

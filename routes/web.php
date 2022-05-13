<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/departemen', [App\Http\Controllers\DepartemenController::class, 'index'])->name('departemen');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course');
Route::get('/bank-soal', [App\Http\Controllers\BankSoalController::class, 'index'])->name('bank-soal');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/news', [App\Http\Controllers\News\NewsController::class, 'index'])->name('news');

Route::get('/e-commerce', [App\Http\Controllers\ECommerce\ECommerceController::class, 'index'])->name('e-commerce');










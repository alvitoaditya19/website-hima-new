<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\SettingController as SettingDashboard;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');


// Route::group(['middleware' => ['auth']], function(){
//       Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//                   ->name('logout');
// });


Route::middleware(['auth'])->group(function () {
    // User Dashboard
    Route::prefix('/user')->name('user.')->middleware('ensureUserRole:user')->group(function(){
      Route::get('/', [App\Http\Controllers\HomeControllerr::class, 'index'])->name('home');

    });

    // ->namespace('User') after prefix

    // Admin Dashboard
    Route::prefix('/admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
        Route::get('/setting', [SettingDashboard::class, 'index'])->name('setting');
        Route::resource('/course', CourseController::class);
        Route::resource('/user', UserController::class);
    });
    // ->namespace('Admin') after prefix
});


Auth::routes();

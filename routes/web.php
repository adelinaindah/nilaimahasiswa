<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
                            HomeController,
                            AboutController,
                            ContactController,
                            SubjectController,
                            LoginController,
                            RegistrationController,
                            DashboardController,
                        };
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

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::resource('subject', SubjectController::class);
Route::middleware('guest')->group(function() {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('post.login');

    Route::get('registration', [RegistrationController::class, 'index'])->name('register');
    Route::post('registration', [RegistrationController::class, 'store']);
});
Route::middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    
});

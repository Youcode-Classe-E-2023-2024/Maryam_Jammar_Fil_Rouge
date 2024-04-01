<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//Route::middleware(['guest'])->group(function () {

Route::get('/sign-up', [RegisterController::class, 'register']);
Route::post('/sign-up', [RegisterController::class, 'store']);

Route::get('/sign-in', [LoginController::class, 'login']);
Route::post('/sign-in', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'destroy']);


    Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password');

    Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);

    Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

// Password Reset
    Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset');

    Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

//});

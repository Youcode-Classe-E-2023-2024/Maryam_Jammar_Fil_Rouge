<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ReservationController;
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
Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/', [HomeController::class, 'home']);

//Route::get('/paiement', function () {
//    return view('paiement');
//});


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


//admin

//Route::middleware(['auth', 'admin'])->group(function () {

//    Route::get('/dashboard', [UserController::class, 'dashboard']);

//    Route::get('/side', function () {
//        return view('admin.side');
//    });

Route::get('/users', [UserController::class, 'show']);
Route::post('/users/{id}', [UserController::class, 'update']);

Route::delete('/delete/{id}', [UserController::class, 'deleteUser']);
Route::get('/deletedUsers', [UserController::class, 'showDeletedUsers']);
Route::post('/restore/{id}', [UserController::class, 'restoreUser']);

Route::get('/check-events', [EventController::class, 'CheckEvent']);
//    Route::get('/approveEvents', function () {
//        return view('admin.approveEvents');
//    });
//
//    //aprove or decline events
Route::post('/approve-event/{id}', [EventController::class, 'approveEvent']);
Route::post('/decline-event/{id}', [EventController::class, 'declineEvent']);


//category
Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::post('/categories', [CategoryController::class, 'store']);

Route::delete('/deleteCategory/{id}', [CategoryController::class, 'destroyCategory']);

//});

Route::get('/dashboard', [OrganizerController::class, 'dashboard']);


//organizer
Route::get('/myEvents', [OrganizerController::class, 'myEvents']);

//Route::middleware(['auth', 'organizer'])->group(function () {

Route::get('/organizer', [UserController::class, 'statistic']);

//events

Route::get('/createEvent', [EventController::class, 'showForm']);

Route::post('/createEvent', [EventController::class, 'store']);

Route::get('/events', [EventController::class, 'publicEvents']);

Route::get('/description/{id}', [EventController::class, 'ShowEventDescription']);

Route::delete('/deleteEvent/{id}', [EventController::class, 'deleteEvent']);

Route::get('/updateEvent/{id}', [EventController::class, 'editEvent']);

Route::post('/updateEvent/{id}', [EventController::class, 'updateEvent']);

Route::get('/reservations', [ReservationController::class, 'CheckReservation']);


//aprove or decline
Route::post('/approve-reservation/{id}', [ReservationController::class, 'approveReservation']);
Route::post('/decline-reservation/{id}', [ReservationController::class, 'declineReservation']);

//});

Route::get('/paiement/{id}', [ReservationController::class, 'paiement']);

Route::post('/buy/{id}', [ReservationController::class, 'buy']);

Route::get('/filter/{tomorrow}', [HomeController::class, 'tomorrow']);
Route::get('/filter/this_week', [HomeController::class, 'thisWeek']);
Route::get('/filter/this_month', [HomeController::class, 'thisMonth']);
Route::get('/filter/this_week-end', [HomeController::class, 'thisWeekend']);
Route::get('/filter/next_week', [HomeController::class, 'nextWeek']);
Route::get('/filter/next_week-end', [HomeController::class, 'nextWeekend']);

Route::get('/events/filter/{category}', [HomeController::class, 'filterByCategory']);

Route::get('/search', [HomeController::class, 'search']);

Route::get('/events/Rabat', [HomeController::class, 'filterByRabat']);
Route::get('/events/Casablanca', [HomeController::class, 'filterByCasablanca']);
Route::get('/events/Marrakech', [HomeController::class, 'filterByMarrakech']);
Route::get('/events/Tanger', [HomeController::class, 'filterByTanger']);

Route::get('/events/{country}', [HomeController::class, 'filterByCountries']);

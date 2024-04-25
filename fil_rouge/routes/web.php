<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
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


//Authentification
Route::middleware(['guest'])->group(function () {

//Google login
    Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
    Route::get('auth/google/callback', [GoogleController::class, 'callbackGoogle']);

//Facebook
    Route::get('/auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook-auth');
    Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

//signup
    Route::get('/sign-up', [RegisterController::class, 'register']);
    Route::post('/sign-up', [RegisterController::class, 'store']);

//signin
    Route::get('/sign-in', [LoginController::class, 'login']);
    Route::post('/sign-in', [LoginController::class, 'store']);

//forgotpassword
    Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password');
    Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);
    Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

// Password Reset
    Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset');
    Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

});

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'destroy']);


    //====================={{Admin}}======================

    Route::middleware(['admin'])->group(function () {

        //users
        Route::get('/users', [UserController::class, 'show']);
        Route::post('/users/{id}', [UserController::class, 'update']);

        Route::delete('/delete/{id}', [UserController::class, 'deleteUser']);
        Route::get('/deletedUsers', [UserController::class, 'showDeletedUsers']);
        Route::post('/restore/{id}', [UserController::class, 'restoreUser']);

//check events
        Route::get('/check-events', [EventController::class, 'CheckEvent']);
//approve or decline events
        Route::post('/approve-event/{id}', [EventController::class, 'approveEvent']);
        Route::post('/decline-event/{id}', [EventController::class, 'declineEvent']);

//category
        Route::get('/categories', [CategoryController::class, 'showCategories']);
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::delete('/deleteCategory/{id}', [CategoryController::class, 'destroyCategory']);

//profile
        Route::get('/profile', [AdminController::class, 'Profile']);
        Route::post('/profile/{id}', [AdminController::class, 'editProfile']);
        Route::post('/edit_profile/{id}', [AdminController::class, 'manage_profile']);

//dashboard
        Route::get('/Admin_dashboard', [AdminController::class, 'statistiques']);

    });

    //====================={{Organizer}}======================

    Route::middleware(['organizer'])->group(function () {

//dashboard
        Route::get('/dashboard', [OrganizerController::class, 'dashboard']);
        Route::get('/statistics', [OrganizerController::class, 'statistics']);

//manage events
        Route::get('/myEvents', [OrganizerController::class, 'myEvents']);
        Route::get('/createEvent', [EventController::class, 'showForm']);
        Route::post('/createEvent', [EventController::class, 'store']);
        Route::get('/updateEvent/{id}', [EventController::class, 'editEvent']);
        Route::post('/updateEvent/{id}', [EventController::class, 'updateEvent']);
        Route::delete('/deleteEvent/{id}', [EventController::class, 'deleteEvent']);

//show all categories
        Route::get('/all_categories', [OrganizerController::class, 'categories']);

//show reservations
        Route::get('/reservations', [OrganizerController::class, 'reservations']);
        Route::get('/LatestReservations', [OrganizerController::class, 'latestReservations']);

    });

    //====================={{Client}}======================

//paiement
    Route::get('/paiement/{id}', [ReservationController::class, 'paiement']);
    Route::post('/buy/{id}', [ReservationController::class, 'buy']);

});


//====================={{Client}}======================


//home page
Route::get('/', [HomeController::class, 'home']);

//description
Route::get('/description/{id}', [EventController::class, 'ShowEventDescription']);

//filter par dates
Route::get('/filter/{tomorrow}', [HomeController::class, 'tomorrow']);
Route::get('/filter/this_week', [HomeController::class, 'thisWeek']);
Route::get('/filter/this_month', [HomeController::class, 'thisMonth']);
Route::get('/filter/this_week-end', [HomeController::class, 'thisWeekend']);
Route::get('/filter/next_week', [HomeController::class, 'nextWeek']);
Route::get('/filter/next_week-end', [HomeController::class, 'nextWeekend']);

//filter by categories
Route::get('/events/filter/{category}', [HomeController::class, 'filterByCategory']);

//filter by ces this 4 cities
Route::get('/events/Rabat', [HomeController::class, 'filterByRabat']);
Route::get('/events/Casablanca', [HomeController::class, 'filterByCasablanca']);
Route::get('/events/Marrakech', [HomeController::class, 'filterByMarrakech']);
Route::get('/events/Tanger', [HomeController::class, 'filterByTanger']);

//filter by countries
Route::get('/events/{country}', [HomeController::class, 'filterByCountries']);

//search
Route::get('/search', [HomeController::class, 'search']);

//subscribe
Route::post('/subscribe', [MemberController::class, 'subscribe']);

Route::get('/about_Us', function () {
    return view('aboutUs');
});


//Route::get('/organizer', [UserController::class, 'statistic']);
//Route::get('/events', [EventController::class, 'publicEvents']);

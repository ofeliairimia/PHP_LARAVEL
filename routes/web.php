<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SponsorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('master');
})->name('home');


//admin
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-admin');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register-admin');
Route::post('/register', [RegisterController::class, 'register']);


//user
Route::get('/login-user', [App\Http\Controllers\AuthUser\LoginController::class, 'showLoginForm'])->name('login-user');
Route::post('/login-user', [App\Http\Controllers\AuthUser\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthUser\LoginController::class, 'logout'])->name('logout');

Route::get('/register-user', [App\Http\Controllers\AuthUser\RegisterController::class, 'showRegistrationForm'])->name('register-user');
Route::post('/register-user', [App\Http\Controllers\AuthUser\RegisterController::class, 'register']);


Route::get('/events', [EventController::class, 'userIndex'])->name('events.userIndex');
Route::get('/events/{event}', [EventController::class, 'details'])->name('events.userDetails');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    //cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{eventId}', [CartController::class, 'addItem'])->name('cart.add');
    Route::get('/cart/remove/{eventId}', [CartController::class, 'removeItem'])->name('cart.remove');
    Route::post('/cart/sendOrder', [CartController::class, 'sendOrder'])->name('cart.sendOrder');


});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


//    events
    Route::get('/admin/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('events.create');
    Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::post('/admin/events', [EventController::class, 'store'])->name('events.store');
    Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('events.update');

//    oreders
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::delete('/orders/{id}', [OrderController::class,'delete'])->name('order.destroy');


//    sponsors
    Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsors.index');
    Route::get('/sponsors/create', [SponsorController::class, 'create'])->name('sponsors.create');
    Route::post('/sponsors', [SponsorController::class, 'store'])->name('sponsors.store');
    Route::get('/sponsors/{id}', [SponsorController::class, 'show'])->name('sponsors.show');
    Route::get('/sponsors/{id}/edit', [SponsorController::class, 'edit'])->name('sponsors.edit');
    Route::put('/sponsors/{id}', [SponsorController::class, 'update'])->name('sponsors.update');
    Route::delete('/sponsors/{id}', [SponsorController::class, 'destroy'])->name('sponsors.destroy');


//   location
    Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
    Route::get('/locations/{id}/edit', [LocationController::class, 'edit'])->name('locations.edit');
    Route::put('/locations/{id}', [LocationController::class, 'update'])->name('locations.update');
    Route::delete('/locations/{id}', [LocationController::class, 'destroy'])->name('locations.destroy');

//partners
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
    Route::post('/partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::get('/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
    Route::put('/partners/{partner}', [PartnerController::class, 'update'])->name('partners.update');
    Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
});



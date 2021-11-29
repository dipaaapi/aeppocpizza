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

Route::get('/dashboard/yourorders', function () {
    return view('livewire.dashboard.yourorders');
});

Route::get('/dashboard/terms', function () {
    return view('livewire.dashboard.terms');
});

Route::get('/dashboard/helpcentre', function () {
    return view('livewire.dashboard.helpcentre');
});

Route::get('/dashboard/addresses', function () {
    return view('livewire.dashboard.addresses');
});

Route::get('/dashboard/profile', function () {
    return view('livewire.dashboard.profile');
});

Route::get('/dashboard/deliverytracking', function () {
    return view('livewire.dashboard.deliverytracking');
});

Route::get('/dashboard/orders', function () {
    return view('livewire.dashboard.orders');
});

Route::get('/dashboard/favourites', function () {
    return view('livewire.dashboard.favourites');
});

Route::get('/dashboard/paymentoptions', function () {
    return view('livewire.dashboard.paymentoptions');
});

Route::get('/dashboard/trending', function () {
    return view('livewire.dashboard.trending');
});

Route::get('/dashboard/premium', function () {
    return view('livewire.dashboard.premium');
});

Route::get('/dashboard/musttry', function () {
    return view('livewire.dashboard.musttry');
});

Route::get('/dashboard/mycart', function () {
    return view('livewire.dashboard.mycart');
});

Route::get('/category/pizza', function () {
    return view('livewire.category.pizza');
});

Route::get('/category/pasta', function () {
    return view('livewire.category.pasta');
});

Route::get('/category/cookies', function () {
    return view('livewire.category.cookies');
});

Route::get('/category/merch', function () {
    return view('livewire.category.merch');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    return view('dashboard');
})->name('dashboard');

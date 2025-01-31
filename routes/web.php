<?php

use Illuminate\Support\Facades\Route;

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

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');



Route::get('/', function () {
    return view('Pages.home');
});
Route::get('/detail', function () {
    return view('Pages.detail');
});
Route::get('/search', function () {
    return view('Pages.search');
});

Route::get('/profile', function () {
    return view('Pages.profile');
});

Route::get('/confirm', function () {
    return view('Pages.confirm');
});

Route::get('/roomDetail', function () {
    return view('Pages.roomdetail');
});

Route::get('/dashboard', function () {
    return view('Pages.dashboard');
});

Route::get('/aboutus', function () {
    return view('Pages.aboutus');
});

Route::get('/contact', function () {
    return view('Pages.contact');
});

require __DIR__.'/auth.php';

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


Route::domain('https://pastes.laravel.link')->group(function () {
    Route::get('/', function () {
        return "test";
    });
});

Route::domain('https://profile.laravel.link')->group(function () {
    Route::get('/', function () {
        return "your profile";
    });
    Route::get('/{user:name}', function ($user) {
        return "{$user} profile";
    });
});

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

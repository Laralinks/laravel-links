<?php

use App\Models\User;
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
        return "paste home page";
    });

    Route::get('/paste/{paste:slug}', function () {
        return "paste view";
    });

});

Route::domain('https://profile.laravel.link')->group(function () {
    Route::get('/', function () {
        return "your profile";
    });
    Route::get('/{user:name}', function (User $user) {
        return "{$user->name} profile";
    });
});

Route::domain('https://laravel.link')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});



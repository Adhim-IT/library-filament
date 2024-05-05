<?php

use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\HomePage;
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

Route::get('/', HomePage::class);




Route::middleware('guest')->group(function () {
    Route::get('/login' , LoginPage::class)->name('login');
    Route::get('/register' , RegisterPage::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/logout' , function () {
     auth()->logout();
     return redirect('/');
    });
 });

<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('Login');
Route::get('/register', Register::class)->name('Register');
route::prefix('admin')->group(function () {
    // Route::get('/users', function () {
        // Matches The "/admin/users" URL
    //});
});
Route::get('/home', Register::class)->name('Register');

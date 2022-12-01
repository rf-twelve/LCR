<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\User\Dashboard as UserDashboard;
use App\Http\Livewire\User\TrackingNumbers;
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

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
route::prefix('admin')->group(function () {
    // Route::get('/users', function () {
        // Matches The "/admin/users" URL
    //});
});
// For grouping prefix and middleware
Route::group(['prefix' => 'user',  'middleware' => 'auth'], function()
{
    Route::get('dashboard', UserDashboard::class)->name('User Dashboard');
    Route::get('tracking-numbers', TrackingNumbers::class)->name('Tracking Numbers');
});
Route::get('/home', Register::class)->name('Register');
// For grouping prefix and middleware
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('dashboard', function() {} );
});

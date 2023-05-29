<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\NotActive;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Lcr\PageCourtDecreeOrder;
use App\Http\Livewire\Lcr\PageDeath;
use App\Http\Livewire\Lcr\PageFetalDeath;
use App\Http\Livewire\Lcr\PageLegalInstrument;
use App\Http\Livewire\Lcr\PageLiveBirth;
use App\Http\Livewire\Lcr\PageMarriage;
use App\Http\Livewire\Lcr\PageMarriageLicense;
use App\Http\Livewire\Lcr\PageViewCourtDecreeOrder;
use App\Http\Livewire\Lcr\PageViewDeath;
use App\Http\Livewire\Lcr\PageViewFetalDeath;
use App\Http\Livewire\Lcr\PageViewLegalInstrument;
use App\Http\Livewire\Lcr\PageViewLiveBirth;
use App\Http\Livewire\Lcr\PageViewMarriage;
use App\Http\Livewire\Lcr\PageViewMarriageLicense;
use App\Http\Livewire\Settings\CompanyProfile;
use App\Http\Livewire\User\Dashboard as UserDashboard;
use Illuminate\Support\Facades\Route;

## Settings
use App\Http\Livewire\Settings\ProfileSettings;
use App\Http\Livewire\Settings\UsersManagement;

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
// Privacy Policy
// Route::get('/privacy-policy', PrivacyPolicy::class)->name('Privacy Policy');

// Credentials
Route::get('/', Login::class)->name('login');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/not-activated', NotActive::class)->name('not-activate');

// For grouping prefix and middleware
Route::group(['prefix' => 'user',  'middleware' => ['auth','is_active']], function()
{
    Route::get('{user_id}/user-dashboard', UserDashboard::class)->name('user-dashboard');

    Route::get('{user_id}/court-decree-order/list', PageCourtDecreeOrder::class)->name('court-decree-order/list');
    Route::get('{user_id}/death/list', PageDeath::class)->name('death/list');
    Route::get('{user_id}/fetal-death/list', PageFetalDeath::class)->name('fetal-death/list');
    Route::get('{user_id}/legal-instrument/list', PageLegalInstrument::class)->name('legal-instrument/list');
    Route::get('{user_id}/live-birth/list', PageLiveBirth::class)->name('live-birth/list');
    Route::get('{user_id}/marriage/list', PageMarriage::class)->name('marriage/list');
    Route::get('{user_id}/marriage-licenses/list', PageMarriageLicense::class)->name('marriage-licenses/list');

    // Page View Route
    Route::get('{user_id}/court-decree-order/view/{id}', PageViewCourtDecreeOrder::class)->name('court-decree-order/view');
    Route::get('{user_id}/death/view/{id}', PageViewDeath::class)->name('death/view');
    Route::get('{user_id}/fetal-death/view/{id}', PageViewFetalDeath::class)->name('fetal-death/view');
    Route::get('{user_id}/legal-instrument/view/{id}', PageViewLegalInstrument::class)->name('legal-instrument/view');
    Route::get('{user_id}/live-birth/view/{id}', PageViewLiveBirth::class)->name('live-birth/view');
    Route::get('{user_id}/marriage/view/{id}', PageViewMarriage::class)->name('marriage/view');
    Route::get('{user_id}/marriage-licenses/view/{id}', PageViewMarriageLicense::class)->name('marriage-licenses/view');

    ## USER MANAGEMENT
    Route::get('{user_id}/company-profile', CompanyProfile::class)->name('company-profile');
    Route::get('{user_id}/profile-settings', ProfileSettings::class)->name('profile-settings');
    Route::get('{user_id}/user-management', UsersManagement::class)->name('user-management');
});

// Route::get('/home', Register::class)->name('Register');
// For grouping prefix and middleware

Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
{
    // Route::get('{user_id}/dashboard', DocumentOverview::class)->name('Admin Dashboard');
});

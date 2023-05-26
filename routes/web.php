<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dts\PrivacyPolicy;
use App\Http\Livewire\Lcr\PageCourtDecreeOrder;
use App\Http\Livewire\Lcr\PageDeath;
use App\Http\Livewire\Lcr\PageFetalDeath;
use App\Http\Livewire\Lcr\PageLegalInstrument;
use App\Http\Livewire\Lcr\PageLiveBirth;
use App\Http\Livewire\Lcr\PageMarriage;
use App\Http\Livewire\Lcr\PageMarriageLicense;
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

// For grouping prefix and middleware
Route::group(['prefix' => 'user',  'middleware' => 'auth'], function()
{
    Route::get('{user_id}/user-dashboard', UserDashboard::class)->name('user-dashboard');

    Route::get('{user_id}/court-decree-order/list', PageCourtDecreeOrder::class)->name('court-decree-order/list');
    Route::get('{user_id}/death/list', PageDeath::class)->name('death/list');
    Route::get('{user_id}/fetal-death/list', PageFetalDeath::class)->name('fetal-death/list');
    Route::get('{user_id}/legal-instrument/list', PageLegalInstrument::class)->name('legal-instrument/list');
    Route::get('{user_id}/live-birth/list', PageLiveBirth::class)->name('live-birth/list');
    Route::get('{user_id}/marriage/list', PageMarriage::class)->name('marriage/list');
    Route::get('{user_id}/marriage-licenses/list', PageMarriageLicense::class)->name('marriage-licenses/list');

    // Route::get('{user_id}/charge-slips', ChargeSlips::class)->name('charge-slips');
    // Route::get('{user_id}/charge-slip/{id}', ChargeSlip::class)->name('charge-slip');
    // Route::get('{user_id}/charge-slip/{id}/create', ChargeSlipCreate::class)->name('charge-slip.create');
    // Route::get('{user_id}/charge-slip/{id}/edit', ChargeSlipEdit::class)->name('charge-slip.edit');
    // Route::get('{user_id}/charge-slip/{id}/print', [ChargeSlipPrint::class, 'print'])->name('charge-slip.print');

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

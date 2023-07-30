<?php

use App\Http\Controllers\Account\DashboardController;
use App\Http\Controllers\Account\InvestmentController;
use App\Http\Controllers\Account\SetupAccountController;
use App\Http\Controllers\Account\VerifyAccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserMetaDataController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/verify-email', [AuthController::class, 'verifyEmail'])->name('auth.verify-email')->middleware('auth');
});

// Home
Route::group(['prefix' => ''], function () {
    Route::get('/', [SiteController::class, 'home'])->name('site.home');
    Route::get('/about', [SiteController::class, 'about'])->name('site.about');
    Route::get('/products', [SiteController::class, 'products'])->name('site.products');
    Route::get('/guide', [SiteController::class, 'guide'])->name('site.guide');
    Route::get('/education', [SiteController::class, 'education'])->name('site.education');
    Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
    Route::get('/signin', [SiteController::class, 'signin'])->name('login');
    Route::get('/signup', [SiteController::class, 'signup'])->name('site.signup');
    Route::get('/forgot-password', [SiteController::class, 'forgotPassword'])->name('site.forgot-password');
    Route::get('/reset-password', [SiteController::class, 'resetPassword'])->name('site.reset-password');
});

Route::group(['prefix' => 'account', 'middleware' => 'auth'], function () {
    Route::post('/complete-setup', [UserMetaDataController::class, 'store'])->name('dashboard.submit-setup-account');
    Route::get('', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/verify-kyc', [VerifyAccountController::class, 'index'])->name('dashboard.verify-kyc');
    Route::get('/verify-email', [VerifyAccountController::class, 'verifyEmail'])->name('dashboard.verify-email');
    Route::get('/complete-setup', [SetupAccountController::class, 'index'])->name('dashboard.setup-account');
    Route::get('/pending-profile-completion', [SetupAccountController::class, 'pendingProfileCompletion'])->name('dashboard.pending-profile-completion');
    Route::get('/investments', [InvestmentController::class, 'index'])->name('dashboard.sinvestments');
});

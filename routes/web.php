<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SubscriberController;
use App\Http\Middleware\PackageMiddleware;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [
    IndexController::class, 'index'
])->name('index');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-post', [RegisterController::class, 'store'])->name('register_post');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-post', [LoginController::class, 'store'])->name('login_post');

Route::post('search', [IndexController::class, 'search'])->name('search');

Route::get(
    '/profile',
    [LoginController::class, 'profile']
)->name('profile');

Route::get('/logout', function () {
    $success = Auth::logout();
    return $success;
})->name('logout');

Route::get('/table', [CompanyInfoController::class, 'table'])
    ->name('table')->middleware(['auth', PackageMiddleware::class]);

Route::get('/packages', [IndexController::class, 'packages'])->name('packages');

Route::post('/checkout', [SubscriberController::class, 'checkout'])->name('checkout');

Route::get('/success', [SubscriberController::class, 'success'])->name('success');
Route::get('/cancel', [SubscriberController::class, 'cancel'])->name('cancel');
Route::post('/webhook', [SubscriberController::class, 'webhook'])->name('webhook');


Route::get('faq', function () {
    return view('faq');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('packages', function () {
    return view('packages');
});

Route::get('refund', function () {
    return view('refund');
});

Route::get('cities', function () {
    return view('cities');
});

Route::get('contacta', function () {
    return view('contacta');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('setting', function () {
    return view('setting');
});

Route::get('ad-post', function () {
    return view('excerpts.ad-post');
});

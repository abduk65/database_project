<?php

use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\Controller;
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


// Route::get('/', function () {
//     return view('welcome');
// })->name('/');


Route::get('/table', [CompanyInfoController::class, 'table'])->name('table');

Route::get('/', function () {
    return view('index');
});



Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

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


// Route::get('/', [Controller::class, ''])->name('one-file');
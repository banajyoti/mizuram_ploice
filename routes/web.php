<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\QuestionariesController;
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
    return redirect('/home');
});

Route::get('/home', [RegisterController::class, 'index'])->name('home');
Route::match(['get', 'post'],'/login', [LoginController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [RegisterController::class, 'register'])->name('register');
Route::post('/send-otp', [RegisterController::class, 'sendOtp'])->name('send.otp');
Route::post('/verify-otp', [RegisterController::class, 'verifyOtp'])->name('verify.otp');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/questionaries', [\App\Http\Controllers\QuestionariesController::class, 'questionaries'])->name('questionaries');
});

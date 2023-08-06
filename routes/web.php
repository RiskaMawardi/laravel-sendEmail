<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('contact-form');
});

// Route::get('/contact', 'ContactController@showContactForm');
// Route::post('/contact', 'ContactController@sendMail');
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'sendEmail'])->name('send');
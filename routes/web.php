<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/',[App\Http\Controllers\PagesController::class, 'getHome'])->name('home');
Route::get('/contact',[App\Http\Controllers\PagesController::class, 'getContact'])->name('contact');
Route::get('/about',[App\Http\Controllers\PagesController::class, 'getAbout'])->name('about');


Route::post('/contact/submit',[App\Http\Controllers\ContactController::class, 'submit'])->name('contact-form-submit');
Route::get('/contact/messages',[App\Http\Controllers\ContactController::class, 'getMessages'])->name('get-messages');
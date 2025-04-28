<?php

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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('blogs/detail', function () {
    return view('blog-detail');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

// tools start from here
Route::get('/tools/cgpa-to-percentage', function () {
    return view('tools.cgpa-to-percentage');
});
Route::get('/tools/sgpa-to-cgpa', function () {
    return view('tools.sgpa-to-cgpa');
});
Route::get('/tools/marks-percentage-calculator', function () {
    return view('tools.marks-percentage-calculator');
});
Route::get('/tools/percentage-to-cgpa', function () {
    return view('tools.percentage-to-cgpa');
});
Route::get('/tools/sgpa-to-percentage', function () {
    return view('tools.sgpa-to-percentage');
});
Route::get('/tools/percentage-to-sgpa', function () {
    return view('tools.percentage-to-sgpa');
});
Route::get('/tools/final-grade', function () {
    return view('tools.final-grade');
});
//tools end here 

Route::get('/tools', [App\Http\Controllers\HomeController::class, 'tools'])->name('tools');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

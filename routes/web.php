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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admin/blogs', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/admin/blog/delete/{id?}', [App\Http\Controllers\BlogController::class, 'delete']);
Route::get('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::post('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::get('/admin/blog/update/{id?}', [App\Http\Controllers\BlogController::class, 'update']);
Route::post('/admin/blog/update/{id?}', [App\Http\Controllers\BlogController::class, 'update']);
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::post('/contact/message/store', [App\Http\Controllers\ContactMassageController::class, 'store']);

Route::get('/admin', function () {
    return redirect(url('/admin/blogs'));
});
Route::get('/dashboard', function () {
    return redirect(url('/admin/blogs'));
});

Route::get('admin/dashboard', function () {
    return redirect(url('/admin/blogs'));
});


Route::get('/blog-detail/{id?}', [App\Http\Controllers\HomeController::class, 'blog_detail']);
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blogs']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Route::get('/admin/blogs', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::post('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::get('/admin/blog/update/{id?}', [App\Http\Controllers\BlogController::class, 'edit']);
Route::post('/admin/blog/update/{id?}', [App\Http\Controllers\BlogController::class, 'edit']);
Route::get('/admin/blog/delete/{id?}', [App\Http\Controllers\BlogController::class, 'delete']);

Route::get('/admin/messages', [App\Http\Controllers\ContactMassageController::class, 'index']);
Route::get('/admin/message/delete/{id}', [App\Http\Controllers\ContactMassageController::class, 'delete']);

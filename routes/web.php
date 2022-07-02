<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MessageController;

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
    return view('static.mainpage');
});

Route::get('/about', function() {
    return view('static.about');
});

Route::get('/contact', function() {
    return view('static.contact');
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/create', [NewsController::class, 'create'])->middleware('auth'); //Проверка авторизованного
Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->middleware('auth'); //Проверка авторизованного
Route::get('/news/{news}', [NewsController::class, 'show']);
Route::post('/news', [NewsController::class, 'store'])->middleware('auth');

Route::post('/contact', [MessageController::class, 'store']);

Auth::routes(); //Отключить регистрацию (['register' => false])

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

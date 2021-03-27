<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

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

Route::get('/skill', [MainController::class, 'skill'])->name('skill');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');

Route::middleware(['auth'])->group(function(){
	Route::get('/forum', [MainController::class, 'forum'])->name('forum');
});

Route::match(['GET', 'POST'], '/login', [AuthController::class, 'index'])->name('login');
Route::match(['GET', 'POST'], '/register', [AuthController::class, 'register'])->name('register');
Route::get('/signout', [AuthController::class, 'signout'])->name('signout');

Route::get('/index', [MainController::class, 'index'])->name('index');
Route::get('/', [MainController::class, 'index']);

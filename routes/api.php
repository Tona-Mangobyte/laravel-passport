<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// public routes
Route::post('/login', [ApiAuthController::class, 'login'])->name('login.api');
Route::post('/register',[ApiAuthController::class, 'register'])->name('register.api');

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');
    Route::get('/articles', [ArticleController::class, 'index'])->name('article.list');
});

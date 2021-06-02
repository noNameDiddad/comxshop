<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\ProgramPages;
use App\Http\Controllers\UserController;

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

Route::get('/',[OutputController::class, 'outputMain'])->name('outputMain');

Route::resource('admin', ProductController::class);


Route::get('/product/buy/{id}', [ScriptController::class, 'buyProduct'])->name('comx-buy');

// Маршруты авторизации
Route::get('/logout', [UserController::class, 'logout'])->name('auth.logout');

Route::get('/register', [UserController::class, 'create'])->name('auth.create');

Route::post('/register', [UserController::class, 'register'])->name('auth.register');

Route::get('/login', [UserController::class, 'show'])->name('auth.show');

Route::post('/login', [UserController::class, 'login'])->name('auth.login');



Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
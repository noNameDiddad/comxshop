<?php

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

Route::get('/',[OutputController::class, 'outputNewItems'])->name('outputNewItems');

Route::get('/info/{id}', [OutputController::class, 'outputItemsInfo'])->name('outputItemsInfo');

Route::post('/admin/save', [ProgramPages::class, 'programItemSave'])->name('programItemSave');

Route::get('/admin',[OutputController::class, 'outputTable'])->name('outputTable');




Route::get('/admin/{id}/update',[OutputController::class, 'outputUpdatedItems'])->name('outputUpdatedItems');
Route::post('/admin/{id}/update', [ScriptController::class, 'scriptItemUpdate'])->name('scriptItemUpdate');
Route::get('/admin/{id}/delete', [ScriptController::class, 'scriptItemDelete'])->name('scriptItemDelete');

Route::get('/product/buy/{id}', [ScriptController::class, 'buyProduct'])->name('comx-buy');

// Маршруты авторизации

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('/login', [UserController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [UserController::class, 'register']);


Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
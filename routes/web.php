<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/',[ProductController::class, 'showProduct'])->name('showProduct');

Route::get('/info/{id}', [ProductController::class, 'infoProduct'])->name('comx-info');

Route::post('/admin/photo', [AdminController::class, 'addPhoto'])->name('admin.photo');

Route::get('/admin',[AdminController::class, 'admin'])->name('admin');

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

Route::get('/admin/{id}/update',[ProductController::class, 'updateProduct'])->name('comx-update');
Route::post('/admin/{id}/update', [ProductController::class, 'updateProductSubmit'])->name('comx-update-submit');
Route::get('/admin/{id}/delete', [ProductController::class, 'deleteProduct'])->name('comx-delete');

Route::get('/product/buy/{id}', [ProductController::class, 'buyProduct'])->name('comx-buy');


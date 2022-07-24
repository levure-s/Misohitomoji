<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', Controllers\PostIndexController::class)->middleware(['auth'])
->name('posts.index');
Route::post('/store', Controllers\PostStoreController::class)
->name('post.store');
Route::get('/serch', Controllers\UserShowSerchController::class)
->name('user.serch');
Route::post('/serch', Controllers\UserSerchController::class)
->name('serch.result');
Route::get('/show/{user}', Controllers\UserShowController::class)
->name('user.show')
->where('user','[0-9]+');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

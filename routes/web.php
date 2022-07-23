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
Route::get('/create', function () {
    return view('posts.create');
})->middleware(['auth']);
Route::post('/store/{id}', Controllers\PostStoreController::class)
->name('post.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

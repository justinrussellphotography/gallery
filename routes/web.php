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

Route::get('/', [CollectionController::class, 'index']);
Route::get('/collection/{collection:slug}', [CollectionController::class, 'view'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('/collection/{collection:slug}/{photo:slug}', [PhotoController::class, 'view'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('/cart', [CartController::class, 'view']);
Route::get('/thanks', function () {
    return view('orders.thanks');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

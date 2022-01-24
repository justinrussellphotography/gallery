<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\PhotoController;

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
Route::get('/collections/{collection:slug}', [CollectionController::class, 'show'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('/collections/{collection:slug}/{photo:slug}', [PhotoController::class, 'show'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('/cart', [CartController::class, 'show']);
Route::get('/thanks', function () {
    return view('orders.thanks');
});

Route::prefix('admin')->name('admin.')
    ->middleware(['auth'])
    ->group(function()
    {
	    // https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller
	    Route::resources([
		    'collections' => \App\Http\Controllers\Admin\CollectionController::class,
		    'photos' => \App\Http\Controllers\Admin\PhotoController::class,
		    'products' => \App\Http\Controllers\Admin\ProductController::class,
	    ]);
    });

require __DIR__.'/auth.php';

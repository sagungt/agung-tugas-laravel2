<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::prefix('products')
    ->name('product.')
    ->controller(ProductController::class)
    ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/add', 'store')->name('store');
        Route::get('/{id}', 'detail')->name('detail');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/add', 'create')->name('create');
        Route::get('/{id}/delete', 'destroy')->name('destroy');
    });

Route::prefix('posts')
    ->name('post.')
    ->controller(PostController::class)
    ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/add', 'store')->name('store');
        Route::post('/add', 'create')->name('create');
        Route::get('/{slug}', 'detail')->name('detail');
        Route::get('/{slug}/edit', 'edit')->name('edit');
        Route::put('/{slug}', 'update')->name('update');
        Route::get('/{slug}/delete', 'destroy')->name('destroy');
    });
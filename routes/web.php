<?php

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

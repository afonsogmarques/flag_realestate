<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FavoritesController;

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

Route::get('/properties', [PropertiesController::class, 'index']);
Route::resource('/properties', PropertiesController::class);

Route::get('/users', [UsersController::class, 'index']);
Route::resource('/users', UsersController::class);

Route::get('/favorites', [FavoritesController::class, 'index']);
Route::resource('/favorites', FavoritesController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

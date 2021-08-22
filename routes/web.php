<?php

use App\Http\Controllers\DayOfferController;
use App\Http\Controllers\FavoritesController;
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

Route::get('/', [DayOfferController::class, 'dayOffer']);
Route::put('/{dayOffer}', [FavoritesController::class, 'addToFavorites']);
Route::delete('/{dayOffer}', [FavoritesController::class, 'removeFromFavorites']);

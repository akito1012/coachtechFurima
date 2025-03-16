<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\FirstRegisterMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;

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


Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'searchItem']);
Route::get('/mypage', [ProfileController::class, 'getMypage']);
Route::get('/mypage/profile', [ProfileController::class, 'getProfile']);
Route::post('/mypage/profile', [ProfileController::class, 'createProfile']);
Route::patch('/mypage/profile', [ProfileController::class, 'updateProfile']);
Route::get('/sell', [ItemController::class, 'getSell']);
Route::post('/sell', [ItemController::class, 'createSell']);
Route::get('/item/{item_id}', [ItemController::class, 'getItem']);
Route::post('/item/{item_id}', [ItemController::class, 'postItemCommentLike']);
Route::get('/purchase/{item_id}', [ItemController::class, 'getPurchase']);
Route::post('purchase/{item_id}', [ItemController::class, 'postPurchase']);
Route::get('/purchase/address/{item_id}', [ProfileController::class, 'getAddress']);
Route::patch('purchase/address/{item_id}', [ProfileController::class, 'updateAddress']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\FirstRegisterMiddleware;
use App\Http\Middleware\LikeCountMiddleware;
use App\Http\Middleware\PurchaseMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FortifyController;

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


Route::post('/login', [FortifyController::class, 'loginUser']);
Route::post('/rezister', [FortifyController::class, 'registerUser']);

Route::post('/logout', [FortifyController::class, 'destroy']);
Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'searchItem']);
Route::get('/mypage', [ProfilesController::class, 'getMypage']);
Route::get('/mypage/profile', [ProfilesController::class, 'getProfile']);
Route::post('/mypage/profile', [ProfilesController::class, 'createProfile']);
Route::patch('/mypage/profile', [ProfilesController::class, 'updateProfile']);
Route::get('/sell', [ItemsController::class, 'getSell']);
Route::post('/sell', [ItemsController::class, 'createSell']);
Route::get('/item/{item_id}', [ItemsController::class, 'getItem']);
Route::post('/item/{item_id}', [ItemsController::class, 'postItemCommentLike'])->middleware('like.count');
Route::get('/purchase/{item_id}', [ItemsController::class, 'getPurchase']);
Route::post('purchase/{item_id}', [ItemsController::class, 'postPurchase'])->middleware('purchase');
Route::get('/purchase/address/{item_id}', [ProfilesController::class, 'getAddress']);
Route::patch('purchase/address/{item_id}', [ProfilesController::class, 'updateAddress']);

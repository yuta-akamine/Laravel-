<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//getメソッドでhelloへアクセスされた際、HelloControllerクラスのindexメソッドを実行
Route::get('/hello/', [HelloController::class, 'index']);

//postメソッドでhelloへアクセスされた際、HelloControllerクラスのpostメソッドを実行
Route::post('/hello/', [HelloController::class, 'post']);

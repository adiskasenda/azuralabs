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

// Route::get('/', function () {
//     return view('menu/beranda');
// });
Route::get('/', [App\Http\Controllers\DiklatController::class, 'index']);
Route::get('/detail/{diklat}', [App\Http\Controllers\DiklatController::class, 'show']);
Route::get('/tambah', [App\Http\Controllers\DiklatController::class, 'create']);
Route::post('/tambah', [App\Http\Controllers\DiklatController::class, 'store']);
Route::get('/{diklat}/delete', [App\Http\Controllers\DiklatController::class, 'destroy']);


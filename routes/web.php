<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TapeteController;

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

Route::group(['prefix' => 'tapetes', 'as' => 'tapetes.'], function () {
    Route::get('/', [TapeteController::class, 'index'])->name('index');
    Route::post('/', [TapeteController::class, 'store'])->name('store');
    Route::get('/list', [TapeteController::class, 'list'])->name('list');
    Route::get('/{id}', [TapeteController::class, 'show'])->name('show');
    Route::post('/{id}', [TapeteController::class, 'update'])->name('update');
    Route::delete('/{id}', [TapeteController::class, 'delete'])->name('delete');
});

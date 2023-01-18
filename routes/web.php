<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpusController;

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
    return view('perpus.create');
});

Route::get('/perpus',[PerpusController::class,'index']);
Route::get('/perpus/create',[PerpusController::class,'create']);
Route::post('/perpus/store',[PerpusController::class,'store']);
Route::get('/perpus/{id}/edit',[PerpusController::class,'edit']);
Route::put('/perpus/{id}',[PerpusController::class,'update']);
// Route::delete('/perpus/{id}',[PerpusController::class,'destroy']);
Route::delete('/perpus/{id}', [PerpusController::class, 'destroy'])->name('perpus.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use App\Http\Controllers\{EmployeeController, SheduleController, ItemController};
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/{id}', [ItemController::class, 'exibir'])->name('items.exibir');
Route::get('/funcionario', [EmployeeController::class, 'getAll'])->name('getAll');
Route::get('/funcionario/{id}', [EmployeeController::class, 'search'])->name('search');
Route::get('/horario', [SheduleController::class, 'getAll'])->name('getAll');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepotController;

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
Route::get('/Entrepot', [EntrepotController::class, 'index'])->name('entrepots.index');
Route::get('/Entrepot/create', [EntrepotController::class, 'create'])->name('entrepots.create');
Route::post('/Entrepot/store', [EntrepotController::class, 'store'])->name('store');


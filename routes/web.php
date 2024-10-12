<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlipbookController; // Assuming your controller path

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

Route::get('/flipbooks', [FlipbookController::class, 'index'])->name('flipbook.index');
Route::get('/flipbooks/create', [FlipbookController::class, 'create'])->name('flipbook.create');
Route::post('/flipbooks', [FlipbookController::class, 'store'])->name('flipbook.store');
Route::get('/flipbooks/{id}', [FlipbookController::class, 'show'])->name('flipbook.show');
Route::get('/flipbooks/{id}/edit', [FlipbookController::class, 'edit'])->name('flipbook.edit');
Route::put('/flipbooks/{id}', [FlipbookController::class, 'update'])->name('flipbook.update');
Route::delete('/flipbooks/{id}', [FlipbookController::class, 'destroy'])->name('flipbook.destroy');
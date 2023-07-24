<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [IdeaController::class, 'index'])->name('idea.index');
Route::get('/ideas/{idea:slug}', [IdeaController::class, 'show'])->name('idea.show');



require __DIR__.'/auth.php';

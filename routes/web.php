<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/dashboard', [HomeController::class, 'homepage'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('entrees', EntreeController::class);
// Route::resource('sorties', SortieController::class);
Route::get('sorties.create/{moto}', [SortieController::class, 'create'])->name('sorties.create');
Route::post('sorties.store', [SortieController::class, 'store'])->name('sorties.store');
Route::resource('tickets', TicketController::class);
Route::resource('motos', MotoController::class);
Route::resource('historiques', HistoriqueController::class);
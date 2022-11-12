<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FiestaController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', FiestaController::class);
*/

Route::get('/', [FiestaController::class, 'index'])->name('fiesta.index');

Route::get('fiesta/create', [FiestaController::class, 'create'])->name('fiesta.create');

Route::get('fiesta/{fiesta}', [FiestaController::class, 'show'])->name('fiesta.show');

Route::delete('fiesta/{fiesta}', [FiestaController::class, 'destroy'])->name('fiesta.destroy');

Route::post('fiesta',[FiestaController::class, 'store'])->name('fiesta.store');

Route::get('fiesta/{fiesta}/edit', [FiestaController::class, 'edit'])->name('fiesta.edit');

Route::put('fiesta/{fiesta}', [FiestaController::class, 'update'])->name('fiesta.update');


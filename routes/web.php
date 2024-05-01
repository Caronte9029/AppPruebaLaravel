<?php

use App\Http\Controllers\PeliculasController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [PeliculasController::class, 'index'])->name('peliculas.index');


Route::controller(PeliculasController::class)->group( function(){
   
    Route::get('/form', 'create');
    Route::get('/formEdit', 'edit');
    Route::post('/formInsert', 'store');
    Route::get('/peliculas/{id}', 'show');
    Route::patch('/form/{id}/peliculas', 'update');
    
    
});


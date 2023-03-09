<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

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


Route::get('/',[NotaController::class,'index'])->name('home');
//Como no borramos desde un form, no tengo el method post,ni delete,ni el @csrf
Route::get('/notas/{id}',[NotaController::class,'destroy'])->name('notas.destroy');
//Salvo el metodo destroy y el index,quiero que el controlador de recursos quede igual
Route::resource('notas', NotaController::class)->except([
    'index','destroy'
]);


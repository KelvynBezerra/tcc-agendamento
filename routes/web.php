<?php

use App\Http\Controllers\Paciente;
use Illuminate\Support\Facades\Route;



Route::get('/login',[Paciente::class, 'loginView']);
Route::get('/cadastro',[Paciente::class, 'cadastroView']);

Route::get('/horario',[Paciente::class, 'horarioView']);
Route::get('/agendamento',[Paciente::class, 'agendamentoView']);
Route::get('/homeCliente', [Paciente::class, 'homeClienteView']);




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

<?php

use App\Http\Controllers\PacienteController;
use App\Models\Paciente;
use Illuminate\Support\Facades\Route;



Route::get('/login',[PacienteController::class, 'loginView']);
Route::get('/cadastro',[PacienteController::class, 'cadastroView']);

Route::get('/horario',[PacienteController::class, 'horarioView']);
Route::get('/agendamento',[PacienteController::class, 'agendamentoView']);
Route::get('/homeCliente', [PacienteController::class, 'homeClienteView']);






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
    return view('loginView');
});

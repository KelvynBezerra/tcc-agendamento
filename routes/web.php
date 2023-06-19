<?php

use App\Http\Controllers\PacienteController;
use App\Models\Paciente;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;



Route::get('/login',[PacienteController::class, 'loginView']);
Route::get('/cadastro',[PacienteController::class, 'cadastroView']);
Route::get('/horario',[PacienteController::class, 'horarioView']);
Route::get('/homeCliente', [PacienteController::class, 'homeCliente']);
Route::get('/exames', [PacienteController::class, 'exameView']);

Route::post('/login',[PacienteController::class, 'login']);
Route::post('/cadastro',[PacienteController::class, 'cadastrar']);
Route::post('/horario',[PacienteController::class, 'agendar']);
Route::post('/exames', [PacienteController::class, 'examinar']);

Route::get('/cancelar/{id}',[PacienteController::class, 'cancelar']);
    






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

Route::get('/',[PacienteController::class, 'loginView']);


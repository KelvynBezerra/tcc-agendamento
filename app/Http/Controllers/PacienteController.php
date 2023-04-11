<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function horarioView()
    {
        return view('agendamento-horario');
    }

    public function agendamentoView()
    {
        return view('agendamento');
    }

    public function homeClienteView()
    {
        return view('home-cliente');
    }

    public function loginView()
    {
        return view('login');
    }

    public function cadastroView()
    {
        return view('cadastro');
    }

    
}

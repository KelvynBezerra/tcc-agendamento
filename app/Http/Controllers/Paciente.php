<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paciente extends Controller
{
    public function horarioView()
    {
        return view('paciente/agendamento-horario');
    }

    public function agendamentoView()
    {
        return view('paciente/agendamento');
    }

    public function homeClienteView()
    {
        return view('paciente/home-cliente');
    }

    public function loginView()
    {
        return view('login/login');
    }

    public function cadastroView()
    {
        return view('login/cadastro');
    }
}

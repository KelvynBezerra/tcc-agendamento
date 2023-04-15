<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function login(Request $request)
    {
        $login=$request->input('loginUser');
        $senha=$request->input('senhaUser');
        $usuario = Login::where('login', '=', $login)->where('senha', '=', $senha)->first();

        if($usuario==null){
            exit('Usario ou senha não encontrado');
        }

        $request->session()->put('usuario', $usuario);
        return redirect('/homeCliente');
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Medico;
use App\Models\Paciente;
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

    public function cadastrar(Request $request)
    {
        $nome=$request->input('nome');
        $cpf=$request->input('cpf');
        $senha=$request->input('senha');
        $email=$request->input('email');

        $paciente = new Paciente();
        $paciente->nome = $nome;
        $paciente->cpf = $cpf;
        $paciente->senha=$senha;
        $paciente->email=$email;

        $paciente->save();

        return redirect('/login');
        
    }

    public function login(Request $request)
    {
        $cpf=$request->input('cpf');
        $senha=$request->input('senha');
        $usuario = Paciente::where('cpf', '=', $cpf)->where('senha', '=', $senha)->first();

        if($usuario==null){
            exit('Usuário não encontrado, confira o login e a senha e tente novamente');
        }

        $request->session()->put('usuario', $usuario);
        return redirect('/homeCliente');
    }

    
}

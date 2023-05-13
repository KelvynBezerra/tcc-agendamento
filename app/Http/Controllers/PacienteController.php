<?php

namespace App\Http\Controllers;
use app\models\Endereco;
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
        $cep=$request->input('$cep');
        $pais=$request->input('$pais');
        $uf=$request->input('$uf');
        $cidade=$request->input('$cidade');
        $bairro=$request->input('$bairro');
        $logradouro=$request->input('$logradouro');
        $numero=$request->input('$numero');
        $complemento=$request->input('$complemento');
        $email=$request->input('$email');
        $celular_1=$request->input('$celular_1');
        $celular_2=$request->input('$celular_2');

        $paciente = new Paciente();
        $paciente->nome = $nome;
        $paciente->cpf = $cpf;
        $paciente->senha=$senha;
        $paciente->cep=$cep;
        $paciente->pais=$pais;
        $paciente->uf=$uf;
        $paciente->cidade=$cidade;
        $paciente->bairro=$bairro;
        $paciente->logradouro=$logradouro;
        $paciente->numero=$numero;
        $paciente->complemento=$complemento;
        $paciente->email=$email;
        $paciente->celular_1=$celular_1;
        $paciente->celular_2=$celular_2;

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

    public function homeCliente()
    {
    $cards = Endereco::all();

    return view('home-cliente', ['cards' => $cards]);
}


public function endereco(){
   
}
}

?>

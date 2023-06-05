<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\models\Endereco;
use App\Models\Login;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PacienteController extends Controller
{
    public function horarioView(Request $form)
    {
        $especialidades = Medico::select('especialidade')->distinct()->get()->pluck('especialidade');
        $espSelecionada = $form->input('especialidades');
        $medSelecionado = $form->input('medicos');
        $diaSelecionado = $form->input('data');
        $horaSelecionada = $form->input('horarios');

        $medicos = collect([]);
        $datas = collect([]);
        $horarios = collect([]);

        if ($espSelecionada != null) {
            $medicos = Medico::where('especialidade', 'like', $espSelecionada)->get();
        }
        if ($medSelecionado != null) {
            $datas = $this->obterDatasProximasQuatroSemanas();
        }
        if ($diaSelecionado != null) {
            $horarios = $this->obterHorarios();
        }

        return view('agendamento-horario', [
            'especialidades' => $especialidades,
            'medicos' => $medicos,
            'datas' => $datas,
            'horarios' => $horarios,
            'espSelecionada' => $espSelecionada,
            'diaSelecionado' => $diaSelecionado,
            'medSelecionado' => $medSelecionado,
            'horaSelecionada' => $horaSelecionada,
        ]);
    }

    public function exameView(Request $form)
    {

        $exameEspecialidades = Medico::select('especialidade')->distinct()->get()->pluck('especialidade');
        $exameEspSelecionada = $form->input('especialidades');
        $exameMedSelecionado = $form->input('medicos');
        $exameDiaSelecionado = $form->input('data');
        $exameHoraSelecionada = $form->input('horarios');

        $exameMedicos = collect([]);
        $exameDatas = collect([]);
        $exameHorarios = collect([]);

        if ($exameEspSelecionada != null) {
            $exameMedicos = Medico::where('especialidade', 'like', $exameEspSelecionada)->get();
        }
        if ($exameMedSelecionado != null) {
            $exameDatas = $this->obterDatasProximasQuatroSemanas();
        }
        if ($exameDiaSelecionado != null) {
            $exameHorarios = $this->obterHorarios();
        }

        return view('agendamento-exames', [
            'especialidades' => $exameEspecialidades,
            'medicos' => $exameMedicos,
            'datas' => $exameDatas,
            'horarios' => $exameHorarios,
            'espSelecionada' => $exameEspSelecionada,
            'diaSelecionado' => $exameDiaSelecionado,
            'medSelecionado' => $exameMedSelecionado,
            'horaSelecionada' => $exameHoraSelecionada,
        ]);
        return view('agendamento-exames');
    }

    function examinar(Request $request)
    {
        $exameMedico = $request->input('exameMedicos');
        $exameData = $request->input('data');
        $exameHora = $request->input('horarios');


        $exameConsulta = new Consulta();
        $exameConsulta->ativa = 1;
        $exameConsulta->data_hora = "$exameData $exameHora";
        $exameConsulta->id_medico = $exameMedico;
        $exameConsulta->id_tipoAgendamento = 2;

        $exameConsulta->id_paciente = session()->get("usuario")->id;
        $exameConsulta->save();

        return redirect('/homeCliente');
    }

    function agendar(Request $request)
    {
        $medico = $request->input('medicos');
        $data = $request->input('data');
        $hora = $request->input('horarios');


        $consulta = new Consulta();
        $consulta->ativa = 1;
        $consulta->data_hora = "$data $hora";
        $consulta->id_medico = $medico;
        $consulta->id_tipoAgendamento = 1;

        $consulta->id_paciente = session()->get("usuario")->id;
        $consulta->save();

        return redirect('/homeCliente');
    }

    function obterDatasProximasQuatroSemanas()
    {
        $datas = [];

        // Obtém a data atual
        $dataAtual = now();

        // Itera pelas próximas 4 semanas
        for ($i = 0; $i < 28; $i++) {
            // Adiciona a data atual mais o número de semanas ao iterador
            $data = $dataAtual->addDay(1);

            // Itera pelos dias da semana de segunda a sexta-feira (1 a 5)
            for ($dia = 1; $dia <= 5; $dia++) {
                // Verifica se o dia atual é uma segunda a sexta-feira
                if ($data->dayOfWeek == $dia) {
                    // Adiciona a data ao array
                    $datas[] = $data->toDateString();
                }
            }
        }

        return collect($datas);
    }

    public function obterHorarios()
    {
        $horarios = [
            '08:00', '08:30', '09:00',
            '09:30', '10:00', '10:30',
            '11:00', '11:30', '13:30',
            '14:00', '14:30', '15:00',
            '15:30', '16:00', '16:30',
            '17:00', '17:30', '18:00',
        ];
        return collect($horarios);
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
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $senha = $request->input('senha');
        $email = $request->input('email');
        $cep = $request->input('$cep');
        $pais = $request->input('$pais');
        $uf = $request->input('$uf');
        $cidade = $request->input('$cidade');
        $bairro = $request->input('$bairro');
        $logradouro = $request->input('$logradouro');
        $numero = $request->input('$numero');
        $complemento = $request->input('$complemento');
        $email = $request->input('$email');
        $celular_1 = $request->input('$celular_1');
        $celular_2 = $request->input('$celular_2');

        $paciente = new Paciente();
        $paciente->nome = $nome;
        $paciente->cpf = $cpf;
        $paciente->senha = $senha;
        $paciente->cep = $cep;
        $paciente->pais = $pais;
        $paciente->uf = $uf;
        $paciente->cidade = $cidade;
        $paciente->bairro = $bairro;
        $paciente->logradouro = $logradouro;
        $paciente->numero = $numero;
        $paciente->complemento = $complemento;
        $paciente->email = $email;
        $paciente->celular_1 = $celular_1;
        $paciente->celular_2 = $celular_2;

        $paciente->save();

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $cpf = $request->input('cpf');
        $senha = $request->input('senha');
        $usuario = Paciente::where('cpf', '=', $cpf)->where('senha', '=', $senha)->first();

        if ($usuario == null) {
            exit('Usuário não encontrado, confira o login e a senha e tente novamente');
        }

        $request->session()->put('usuario', $usuario);
        return redirect('/homeCliente');
    }

    public function homeCliente()
    {
        $id_paciente = session()->get("usuario")->id;
        $consultas = Consulta::where('id_paciente', '=', $id_paciente)->where('ativa', '=', '1')->get();

        return view('home-cliente', ['consultas' => $consultas]);
    }


    public function endereco()
    {
    }
}

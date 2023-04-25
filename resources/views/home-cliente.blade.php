<h1>Home Cliente</h1>
<h1>Olá, {{ session('usuario')->pacientes->first()->nome}}</h1>


{{-- <table>
    @foreach(session('usuario')->pacientes->first()->consultas as $consulta)
        <tr>
            Nome do médico: {{ $consulta->medico->nome }}
            Horário da consulta {{ $consulta->diahora }}
        </tr>
    @endforeach
</table> --}}

{{-- use App\Models\Paciente;
 
$HistConsultas = consultas::all();
 
foreach ($HistConsultas as $consulta) {
    echo $HistConsultas->consulta->data;
} --}}

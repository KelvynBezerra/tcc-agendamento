<h1>Home Cliente</h1>
<h1>Olá, {{ session('usuario')->paciente->nome}}</h1>

{{-- use App\Models\Paciente;
 
$HistConsultas = consultas::all();
 
foreach ($HistConsultas as $consulta) {
    echo $HistConsultas->consulta->data;
} --}}
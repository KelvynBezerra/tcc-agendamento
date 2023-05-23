<x-layout>

    <span class="text-Indicator space-40">Cadastro de Exames</span>
    <span></span>
    <span></span>
    <span></span>
    <div class="" style="margin-top: 40px;"></div>
    <span></span>




  </div>
  <div class="flex-row space-40 content-space-between">
    
    <form class="cadastrarConsulta space-30 content-vcenter" >
      <span class="material-icons" style="margin-right: 10px;">vaccines</span>
      
      <select name="exameEspecialidades" id="especialidades" onchange="document.querySelector('form').submit()">
        <option value="" disabled hidden selected>Especialidade</option>
        @foreach($especialidades as $esp)
        <option @if($esp == $espSelecionada) {{ 'selected' }} @endif>{{ $esp }}</option>
        @endforeach
      </select>

      @if($espSelecionada != null)
      <select name="exameMedicos" onchange="document.querySelector('form').submit()">
        <option value="" disabled hidden selected>Selecione o médico</option>
        @foreach($exameMedico as $med)
        <option @if($med->id == $medSelecionado) {{ 'selected' }} @endif value="{{ $med->id }}" >{{ $med->nome }}</option>
        @endforeach
      </select>
      @endif
      
      <span class="material-icons" onclick="">calendar_month</span>
      @if($medSelecionado != null)
      <select name="data" id="data" onchange="document.querySelector('form').submit()">
        <option value="">Selecione a data</option>
        @foreach($datas as $date)
        <option @if($date == $diaSelecionado) {{ 'selected' }} @endif >{{ $date }}</option>
        @endforeach
      </select>
      @endif

      @if($diaSelecionado != null)
      <select name="horarios" onchange="document.querySelector('form').submit()">
        <option value="">Selecione um horario</option>
        @foreach($horarios as $hora)
        <option value="{{ $hora }}" @if($hora == $horaSelecionada) {{'selected'}} @endif> {{$hora}}</option>
        @endforeach
      </select>
      @endif

      @if($horaSelecionada != null)
      <button type="submit" onclick="document.querySelector('form').method.'post'">Enviar</button>
     @endif
      @csrf
    </form>
    
    

  </div>
  <footer class="flex-row content-center space-30 box" style="position:absolute; bottom: 0; width: 100%;">
    <span>Etec Antonio Devisate</span>
  </footer>
  



</x-layout>
<x-layout>

    <span class="text-Indicator space-40">Cadastro de Consulta</span>
    <span></span>
    <span></span>
    <span></span>
    <div class="" style="margin-top: 40px;"></div>
    <span></span>




  </div>
  <div class="flex-row space-40 content-space-between">
    
    <form class="cadastrarConsulta space-30 content-vcenter" >
      <span class="material-symbols-outlined">
pill
</span>
      
      <select name="especialidades" id="especialidades" onchange="document.querySelector('form').submit()">
        <option value="" disabled hidden selected>Especialidade</option>
        @foreach($especialidades as $esp)
        <option @if($esp == $espSelecionada) {{ 'selected' }} @endif>{{ $esp }}</option>
        @endforeach
      </select>

      @if($espSelecionada != null)
      @if($espSelecionada == 'Cardiologista')
      <span class="material-symbols-outlined">
ecg_heart
</span>
      @endif
      @if($espSelecionada == 'Neurologista')
      <span class="material-symbols-outlined">
neurology
</span>
      @endif
      @if($espSelecionada == 'Psicologo')
      <span class="material-symbols-outlined">
psychology
</span>
      @endif
      @if($espSelecionada == 'Ortopedista')
      <span class="material-symbols-outlined">
rheumatology
</span>
      @endif
      
      <select name="medicos" onchange="document.querySelector('form').submit()">
        <option value="" disabled hidden selected>Selecione o médico</option>
        @foreach($medicos as $med)
        <option @if($med->id == $medSelecionado) {{ 'selected' }} @endif value="{{ $med->id }}" >  {{ $med->nome }}</option>
        @endforeach
      </select>
      @endif
      
      
      
      @if($medSelecionado != null)
      <span class="material-symbols-outlined">
free_cancellation
</span>
      <select name="data" id="data" onchange="document.querySelector('form').submit()">
        <option value="">Selecione a data</option>
        @foreach($datas as $date)
        <option @if($date == $diaSelecionado) {{ 'selected' }} @endif >{{ $date }}</option>
        @endforeach
      </select>
      @endif

      @if($diaSelecionado != null)
      <span class="material-symbols-outlined">
pace
</span>
      <select name="horarios" onchange="document.querySelector('form').submit()">
        <option value="">Selecione um horario</option>
        @foreach($horarios as $hora)
        <option value="{{ $hora }}" @if($hora == $horaSelecionada) {{'selected'}} @endif> {{$hora}}</option>
        @endforeach
      </select>
      @endif

      @if($horaSelecionada != null)
      <br><br>
      <button type="submit" class="botaoCadastro" style="background-color: rgb(234, 250, 253);" onclick="document.querySelector('form').method='post'">Enviar</button>
      @endif
      @csrf
    </form>
    

    

  </div>
  <footer class="flex-row content-center space-30 box" style="position:absolute; bottom: 0; width: 100%;">
    <span>Etec Antonio Devisate</span>
  </footer>
  



</x-layout>
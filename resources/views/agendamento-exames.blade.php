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
      
      <select name="exameSelecionado" id="especialidades" onchange="document.querySelector('form').submit()">
        <option value="" disabled hidden selected>Exames</option>
        @foreach($exames as $exm)
        <option @if($exm == $exameSelecionado) {{ 'selected' }} @endif>{{ $exm }}</option>
        @endforeach
      </select>

     @if($exameSelecionado != null)
      <span class="material-symbols-outlined">
free_cancellation
</span>
      <select name="data" id="data" onchange="document.querySelector('form').submit()">
        <option value="">Selecione a data</option>
        @foreach($exameDatas as $exmDate)
        <option @if($exmDate == $exameDiaSelecionado) {{ 'selected' }} @endif >{{ $exmDate }}</option>
        @endforeach
      </select>
      @endif
    

      @if($exameDiaSelecionado != null)
      <select name="horarios" onchange="document.querySelector('form').submit()">
        <option value="">Selecione um horario</option>
        @foreach($exameHorarios as $exmHora)
        <option value="{{ $exmHora }}" @if($hora == $exameHoraSelecionada) {{'selected'}} @endif> {{$exmHora}}</option>
        @endforeach
      </select>
      @endif

      @if($exameHoraSelecionada != null)
      <button type="submit" onclick="document.querySelector('form').method.'post'">Enviar</button>
     @endif
      @csrf
    </form>
    
    

  </div>
  <footer class="flex-row content-center space-30 box" style="position:absolute; bottom: 0; width: 100%;">
    <span>Etec Antonio Devisate</span>
  </footer>
  



</x-layout>
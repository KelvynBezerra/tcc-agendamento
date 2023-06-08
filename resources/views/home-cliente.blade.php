<x-layout>

    <span class="text-Indicator space-40">Consultas</span>
    <span></span>
    <span></span>
    <span></span>
        <a href="horario"><div class="button primary " style="margin-top: 40px;"> NOVA CONSULTA</div></a>
    <span></span>


  </div>
  <center>
    <div class="agrupamentoCards content-center">
      <div class=" flex-row content-center gap-40">
      @foreach ($consultas as $consulta)
      @if($consulta->id_tipoAgendamento="1"){
      <div class="cards">
          <h1>{{ $consulta->id }}</h1>
          <div class="flex-row space-10">
            <span class="material-icons">
              schedule
            </span>
            <span>{{ strftime('%d/%m/%Y %H:%M', strtotime($consulta->data_hora)) }}</span>
          </div>

          <div class="flex-row space-10">
            <span class="material-icons">
              vaccines
            </span>
            <span style="font-size: 20px;">{{$consulta?->medico?->especialidade }}</span>
            <div class="break">{{ $consulta?->medico?->nome }}</div>
          
          <div style="margin-left:20px">
            <button type="sub" class="button">Excluir consulta</button>
          </div>
          

          </div>
          <div class="break"></div> <br>

          <!-- <div class="flex-row space-10">
            <span class="material-icons">
              local_pharmacy
            </span>
            <span style="font-size: 20px;"></span>
            <div class="break"></div>
          </div> -->
        </div>
        }

        <!-- EXAMES-->
        {{-- @else{ --}}
        <!--<div class="agrupamentoCards content-center">
      <div class=" flex-row content-center gap-40">
        <div class="cards">
          <h1>1</h1>
          <div class="flex-row space-10">
            
            <span>10/04/2023 10:00</span>
          </div>
          <span class="material-symbols-outlined">
              prescriptions
            </span>
        </div>
        -->
        <div class="agrupamentoCards content-center">
      <div class=" flex-row content-center gap-40">
        <div class="cards">
          <h1>1</h1>
          <div class="flex-row space-10">
            <span class="material-icons">
              schedule
            </span>
            <span>10/04/2023 10:00</span>
          </div>

          <div class="flex-row space-10">
            <span class="material-symbols-outlined">
              prescriptions
            </span>
            <span style="font-size: 20px;">blabla</span>
            <div style="margin-left:20px">
          <button type="sub" class="button" style="float: right">Excluir Exame</button>
          </div>
          
          </div>
          
        </div>
        
        {{-- } --}}
        @endif
        @endforeach
        
        


      </div>

  </center>  

  

</x-layout>
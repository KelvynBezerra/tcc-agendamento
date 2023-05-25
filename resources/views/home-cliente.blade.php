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
            <span style="font-size: 20px;">{{$consulta->medico->especialidade }}</span>
            <div class="break">{{ $consulta->medico->nome }}</div>
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
        @endforeach
        


      </div>

  </center>  

  

</x-layout>
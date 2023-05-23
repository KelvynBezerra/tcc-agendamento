<x-layout>

    <span class="text-Indicator space-40">Consultas</span>
    <span></span>
    <span></span>
    <span></span>
        <a href="/horario"><div class="button primary " style="margin-top: 40px;"> NOVA CONSULTA</div></a>
    <span></span>


  </div>
  <center>
    <div class="agrupamentoCards content-center">
      <div class=" flex-row content-center gap-40">
      @foreach ($cards as $card)
      <div class="cards">
          <h1>{{ $card->id }}</h1>
          <div class="flex-row space-10">
            <span class="material-icons">
              schedule
            </span>
            <span>{{ $card->data_hora }}</span>
          </div>

          <div class="flex-row space-10">
            <span class="material-icons">
              vaccines
            </span>
            <span style="font-size: 20px;">{{$card['especialidade']}}</span>
            <div class="break">{{ $card->id_medico }}</div>
          </div>
          <div class="break"></div> <br>
          <div class="flex-row space-10">
            <span class="material-icons">
              local_pharmacy
            </span>
            <span style="font-size: 20px;">{{$card->localidade}}</span>
            <div class="break">{{$card->endereco}}</div>
          </div>
        </div>
        @endforeach
        


      </div>

  </center>  

  

</x-layout>
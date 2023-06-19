<x-layout>
  <span class="text-Indicator space-40">Consultas</span>
  <span></span>
  <span></span>
  <span></span>
  <a href="exames"><div class="button primary " style="margin-top: 40px; margin-right: -175px"> NOVO EXAME</div></a>
  <a href="horario"><div class="button primary " style="margin-top: 40px;"> NOVA CONSULTA</div></a>
  <span></span>
  </div>
  <center>
    <div class="agrupamentoCards content-center">
      <div class=" flex-row content-center gap-40">
          @foreach ($consultas as $consulta)
            @if($consulta->id_tipoAgendamento=="1")
              <div class="cards">         
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
                    <a href="/cancelar/{{$consulta->id}}"><div class="button primary " style="margin-top: 40px">Cancelar consulta</div></a>
                  </div>
                </div>
                <div class="break"></div> <br>
                {{-- Fim do cartão  --}}
              </div>
              {{-- Espaço entre cartão --}}

              <!-- EXAMES-->
            @else

              <div class="cards">         
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
                  <span style="font-size: 20px;">{{ $consulta?->exame }}</span>
                  
                  <div style="margin-left:20px">
                    
                    <a href="/cancelar/{{$consulta->id}}"><div class="button primary " style="margin-top: 40px;">Cancelar exame</div></a>
                    
                  </div>
                </div>
                <div class="break"></div> <br>
                {{-- Fim do cartão  --}}
              </div>
              {{-- Espaço entre cartão --}}



            @endif
          @endforeach

  </center>  
</x-layout>
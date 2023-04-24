<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Página</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flex.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flex-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

  <div class="flex-row content-space-between space-20 box">


    <div class="">
      <img src="/imagens/menu-ico.png" class="" id="toggle" alt="" onclick="expand()">
    </div>
    <div class=" content-center " style="display: flex;">
      <span style="cursor: default;">TCC</span>
    </div>
    <div class=" flex-row content-center gap-10">
      <span style="cursor:default">fulano de tal</span>
      <img src="/imagens/person-ico.png" alt="">
    </div>
  </div>


  <div class="flex-row">
    <div class="menu ">

      <div class="items" id="items">
        <a href="#">
          <span class="material-icons blue">query_stats</span>
          <span class="selected-text ">CONSULTAS</span>
        </a>
        <a href="#">
          <span class="material-icons">monitor_heart</span> <span class="text-menu">EXAMES</span>
        </a>
        <a href="#">
          <span class="material-icons">personal_injury</span> <span class="text-menu">PACIENTES</span>
        </a>
        <a href="#">
          <span class="material-icons">vaccines</span> <span class="text-menu">MÉDICOS</span>
        </a>
      </div>
    </div>

    <span class="text-Indicator space-40">Consultas</span>
    <div class="button primary" style="margin-top: 40px; margin-left: 600px;">NOVA CONSULTA</div>
    <span></span>

  </div>


  <div class=" flex-row content-center gap-40">
    <div class="cards">
      <div class="flex-row space-10">
        <span class="material-icons">
          schedule
        </span>
        <span>10/04/2023 10:00</span>
      </div>

      <div class="flex-row space-10">
        <span class="material-icons">
          vaccines
        </span>
        <span style="font-size: 20px;">Psicólogo</span>
        <div class="break">Dr. Guilherme Petri Leoni</div>
      </div>
      <div class="break"></div> <br>
      <div class="flex-row space-10">
        <span class="material-icons">
          local_pharmacy
        </span>
        <span style="font-size: 20px;">Hospital das Clínicas</span>
        <div class="break">Rua Dr. Reinaldo Machado, 255</div>
        <div class="break">Fragata, Marília - SP</div>


      </div>
    </div>
    <div class=" flex-row content-center gap-40">
      <div class="cards">
        <div class="flex-row space-10">
          <span class="material-icons">
            schedule
          </span>
          <span>10/04/2023 10:00</span>
        </div>

        <div class="flex-row space-10">
          <span class="material-icons">
            vaccines
          </span>
          <span style="font-size: 20px;">Psicólogo</span>
          <div class="break">Dr. Guilherme Petri Leoni</div>
        </div>
        <div class="break"></div> <br>
        <div class="flex-row space-10">
          <span class="material-icons">
            local_pharmacy
          </span>
          <span style="font-size: 20px;">Hospital das Clínicas</span>
          <div class="break">Rua Dr. Reinaldo Machado, 255</div>
          <div class="break">Fragata, Marília - SP</div>


        </div>
      </div>
      <div class=" flex-row content-center gap-40">
        <div class="cards">
          <div class="flex-row space-10">
            <span class="material-icons">
              schedule
            </span>
            <span>10/04/2023 10:00</span>
          </div>

          <div class="flex-row space-10">
            <span class="material-icons">
              vaccines
            </span>
            <span style="font-size: 20px;">Psicólogo</span>
            <div class="break">Dr. Guilherme Petri Leoni</div>
          </div>
          <div class="break"></div> <br>
          <div class="flex-row space-10">
            <span class="material-icons">
              local_pharmacy
            </span>
            <span style="font-size: 20px;">Hospital das Clínicas</span>
            <div class="break">Rua Dr. Reinaldo Machado, 255</div>
            <div class="break">Fragata, Marília - SP</div>


          </div>
        </div>

        <script>
          var state = false;
          function expand() {
            if (state == false) {
              document.getElementById("items").style.transform = 'scaleX(1)';
              document.getElementById("toggle").style.boxShadow = '1px 1px 1px gray';
              state = true;
            }
            else {
              document.getElementById("items").style.transform = 'scaleX(0)';
              document.getElementById("toggle").style.boxShadow = 'none';
              state = false;
            }
          }
        </script>
</body>

</html>
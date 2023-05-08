<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Página</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flex-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flex.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
  <header class="flex-row content-vcenter content-space-between space-20 box">

    <img src="/imagens/menu-ico.png" class="" id="toggle" alt="" onclick="expand()">
    <span style="cursor: default;">TCC</span>

    <img src="/imagens/person-ico.png" alt="">


  </header>
  <!--
  <div class="flex-row content-space-between space-20 box">

    
    <div class="">
      <img src="/imagens/menu-ico.png" class="" id="toggle" alt="" onclick="expand()">
    </div>
    <div class="   " style="display: flex;">
      
    </div>
    <div class=" flex-row   gap-10">
      
    </div>
  </div>

-->


  <div class="flex-row content-space-between">

    <div class="menu ">

      <div class="items" id="items">
        <a href=""></a>
        <a href="consultas.html">

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

    <span class="text-Indicator space-40">Cadastro de Consulta</span>
    <span></span>
    <span></span>
    <span></span>
    <div class="" style="margin-top: 40px;"></div>
    <span></span>




  </div>
  <div class="flex-row space-40 content-space-between">
    <div></div>
    <div class="cadastrarConsulta space-30 content-vcenter ">
      <span class="material-icons" style="margin-right: 10px;">vaccines</span>
      <select name="especialidade" id="especialidade">
        <option value="null-value">Especialidade</option>
        <option value="psicologo">Psicólogo</option>
        <option value="cardiologista">Cardiologista</option>
        <option value="neurologista">Neurologista</option>
        <option value="ortopedista">Ortopedista</option>
      </select>
      <span class="material-icons" onclick="">calendar_month</span>
      <select name="data" id="data" >
        <option value="nulo">Selecione a data</option>
      </select>
      
    </div>
    <div></div>

  </div>
  <footer class="flex-row content-center space-30 box" style="position:absolute; bottom: 0; width: 100%;">
    <span>Etec Antonio Devisate</span>
  </footer>
  <script>
    let min = 1;
    const d = new Date();
    let diaAtual = (d.getDay());
    let month = d.getMonth() + 1;
    let anoAtual = (d.getFullYear());
    var state = false;

    meses = ['', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
    dias = ['', '31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31'];

    function expand() {
      if (state == false) {
        document.getElementById("items").style.transform = 'scaleX(1)';
        /*document.getElementById("toggle").style.boxShadow = '1px 1px 1px gray';*/
        state = true;
      }
      else {
        document.getElementById("items").style.transform = 'scaleX(0)';
        document.getElementById("toggle").style.boxShadow = 'none';
        state = false;
      }
    }

    let especialidade = document.getElementById('especialidade');
    let value = especialidade.options[especialidade.selectedIndex].value;
    let select = document.getElementById('data');


    function teste() {
      diasMesAtual = dias[month]
      for (i = diaAtual; i <= diasMesAtual; i++) {

        var opcao = document.createElement('option');
        if ((i <= 9) && (month <= 9)) {
          opcao.value = '0' + i.toString() + '/' + month.toString() + '/' + anoAtual;
          opcao.innerHTML = '0' + i.toString() + '/' + '0' + month.toString() + '/' + anoAtual;
        }
        else {
          if ((month > 9) && (i <= 9)) {
            opcao.value = '0' + i.toString() + '/' + month.toString() + '/' + anoAtual;
            opcao.innerHTML = '0' + i.toString() + '/' + month.toString() + '/' + anoAtual;
          }
          else {
            if ((month > 9) && (i >= 9)) {
              opcao.value = i.toString() + '/' + month.toString() + '/' + anoAtual;
              opcao.innerHTML = i.toString() + '/' + month.toString() + '/' + anoAtual;
            }
            else {
              if ((month <= 9) && (i >= 9)) {
                opcao.value = i.toString() + '/' + '0' + month.toString() + '/' + anoAtual;
                opcao.innerHTML = i.toString() + '/' + '0' + month.toString() + '/' + anoAtual;
              }
            }
          }
        }


        select.appendChild(opcao);


      }
    }
      teste();
  </script>
</body>

</html>
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="/js/jquery.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script>
    .{}
  </script>

</head>

<body>
  <header class="flex-row content-vcenter content-space-between space-20 box">
    
    <img src="/imagens/menu-ico.png" class=""id="toggle" alt="" onclick="expand()">
    <span style="cursor: default;">TCC</span>
    
    <img src="/imagens/person-ico.png" alt="" >
 
    
  </header>



  <div class="flex-row content-space-between">

    <div class="menu ">

      <div class="items" id="items">
        <a href="/homeCliente">

          <span class="material-symbols-outlined">
home
</span>
          <span class="selected-text ">HOME</span>

        </a>
        <a href="/horario">

          <span class="material-symbols-outlined">
medical_information
</span>
          <span class="selected-text ">CONSULTAS</span>

        </a>
        

        <a href="/exames">
          <span class="material-symbols-outlined">
prescriptions
</span> <span class="text-menu">EXAMES</span>
        </a>
        
      </div>
    </div>

    {{$slot}}
    <hr style="margin: 50px">
<script>
    var state = false;
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
  </script>

  <br>
  <footer class="flex-row content-center space-30 box" style="position:fixed; bottom: 0; width: 100%;">
    <span>Etec Antonio Devisate</span>
  </footer>
  

</body>

</html>

<x-layout>

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
    let diaAtual = (d.getDate());
    let month = d.getMonth() + 1;
    let anoAtual = (d.getFullYear());
    var state = false;

    meses = ['', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
    dias = ['', '31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31'];

    function expand() {
      if (state == false) {
        document.getElementById("items").style.transform = 'scaleX(1)';
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



</x-layout>
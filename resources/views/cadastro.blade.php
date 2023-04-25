<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilizacao.css') }}">
</head>
<body>
    <header>
        <img src="https://logodownload.org/wp-content/uploads/2014/05/unimed-logo-1.png" class="imagem-logo" alt="">
    </header>
<div class="containerForm">
    <form action="">
        <fieldset class="fieldsetCadastro">
            <h2>Cadastro Paciente</h2>
            <br>
            <label for="nomeCadastro">Nome</label> <br>
            <input type="text" required placeholder="Informe seu nome completo" id="nomeCadastro" name="nomeCadastro" class="inputsCadastro">
            <br>
            <label for="cpfCadastro" >CPF</label>
            <label for="dataNascimentoCadastro" class="inputDataNasc">Data de Nascimento</label>  <br>
            <input type="text" required placeholder="Informe seu CPF" id="cpfCadastro" name="cpfCadastro"  class="inputsCadastro">
            <input type="date" class="inputDataNascimento">
            <br>
            <label for="emailCadastro">E-mail</label>
            <label for="senhaCadastro" id="senhaCadastro"><span class="spanSenha"> Senha</span></label> <br>
        
            
            <input type="email" required placeholder="Informe seu E-mail" id="emailCadastro" name="emailCadastro" class="inputsCadastro">   
            <input type="password" required placeholder="Informe sua senha" id="senhaCadastro" name="senhaCadastro" class="inputSenha">
            
            
            <br><br>
            <label for="celularCadastro">Celular</label> <br>
            <input type="text" required placeholder="" id="celularCadastro" name="celularCadastro" class="inputDDD">
            <input type="number" required placeholder="Informe seu Telefone" id="celularCadastro" name="celularCadastro" class="inputsCadastro">
           <br> 
            <label for="cepCadastro">CEP</label> <br>
            <input type="text" required placeholder="Informe o CEP de sua residência" id="cepCadastro" name="cepCadastro" class="">
            <br>
            <label for="logradouroCadastro">Logradouro</label>
            <label for="numeroCadastro" class="textoNumeroCadastro">Número</label>
            <br>
            <input type="text" required placeholder="Informe o Logradouro de sua residência" id="logradouroCadastro" name="logradouroCadastro" class="inputLogradouro">
            <input type="number" required placeholder="" id="numeroCadastro" name="numeroCadastro" class="numeroCadastro"> <br>
            <label for="bairroCadastro">Bairro</label>
            <label for="complementoCadastro" class="complementoCadastroTexto">Complemento</label> <br>
            <input type="text" required placeholder="Informe o bairro de sua residência" id="bairroCadastro" name="bairroCadastro" class="inputBairro">
            <input type="text" placeholder="" id="complementoCadastro" name="complementoCadastro" class="inputDataNascimento">
            <br>
            <label for="cidadeCadastro">Cidade</label>
            <label for="estadoCadastro" class="complementoCadastroTexto">Estado</label> <br>
            <input type="text" required placeholder="Informe a cidade de sua residência" id="cidadeCadastro" name="cidadeCadastro" class="inputBairro">
            <select name="estadoCadastro" id="estadoCadastro" class="inputSelectEstado">
                <option value="" class="inputDataNascimento">Selecione</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </fieldset>
    </form>
</div>

    <footer>
        <div class="alinhaFooter">
        Todos os direitos reservados © 2023
        </div>
    </footer>
</body>
</html>
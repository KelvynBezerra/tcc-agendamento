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
    
  <script src="/js/jquery.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="bodyCadastro">
    
    <img src="/imagens/logo-teste.png" class="logo2" alt="">
    <div class="fundo2 content-center">
    <div class="fundocadastro">
        

        <form action="/cadastro" method="post">
            
            <table class="tabelaCadastro">
                <tr>
                    <td><label for="nome">Nome</label></td>
                    <td><input type="text" name="nome" id="nome" placeholder="Informe seu nome" required></td>
                </tr>
                <tr>
                    <td><label for="senha">Senha</label></td>
                    <td><input type="password" name="senha" id="senha" placeholder="Informe uma senha" required></td>
                </tr>
                <tr>
                    <td><label for="cpf">CPF</label></td>
                    <td><input type="text" name="cpf" id="cpf" placeholder="Informe seu CPF" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Informe seu email" required></td>
                </tr>
                <tr>
                    <td><label for="telefone">Telefone</label></td>
                    <td><input type="tel" pattern="([0-9]{2}[0-9]{5}[0-9]{4})" name="telefone" id="telefone" placeholder="xx xxxxx-xxxx " required></td>
                </tr>
                <tr class="btncadastro">
                    <td><button type="submit" class="botaoCadastro">Cadastrar</button></td>
                </tr>
                @csrf
            </table>
        </form>


</div>
    </div>

</body>
</html>
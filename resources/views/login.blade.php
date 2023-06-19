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
    
  <div class="fundo content-center">
    <img src="/imagens/logo-teste.png" class="logo" alt="">
    <div class="fundoCadastro" >

        

            <form action="/login" method="post">
                
                <table class="tabelaCadastro">
                    <tr>
                        <td><label for="cpf">CPF</label></td>
                        <td><input type="text" name="cpf" id="cpf" placeholder="CPF para login" required></td>
                    </tr>
                    <tr>
                        <td><label for="senha">Senha</label></td>
                        <td><input type="password" name="senha" id="senha" placeholder="Senha de acesso" required></td>
                    </tr>


                    <tr class="btncadastro">
                        <td><button type="submit" class="botaoCadastro">Entrar</button></td>
                        <td><a href="/cadastro" style="color: black; font-size: 13px; padding: none;">Não possui cadastro? <span style="color: red; text-decoration: underline;">Clique Aqui</span></a></td>
                    </tr>
                </table>
                @csrf
            </form>


        
        </div>
        
    </div>

</body>
</html>
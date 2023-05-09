<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilizacao.css') }}">
    <title>Login</title>    
</head>
<body>
        <header>
            <img src="https://logodownload.org/wp-content/uploads/2014/05/unimed-logo-1.png" class="imagem-logo" alt="">
  </header>
    

       
        <div class="containerForm">
        <form action="/login" method="post">
      
            <fieldset class="fieldsetLogin">
                <br>
                <label for="">Login</label> <br><br>

                <label for="loginUser">Usuário</label> <br>
                <input type="text" name="cpf" id="loginUser" required placeholder="Informe seu Login"> <br>

                <label for="senhaUser">Senha:</label> <br>
                <input type="password" name="senha" id="senhaUser" required placeholder="Informe sua Senha"> <br>

                <span class="recuperacaoSenha"><a href="#">Esqueci a senha</a></span> <br>

                <input type="submit" value="Entrar" class="enviar-login"> <br>
                <span class="texto-cadastrar"> Não tem conta? <span><a href="/cadastro">Cadastre-se</a></span></span>

                

                @csrf

            </fieldset>
        
        </form>
        </div>
        <footer>
            <div class="alinhaFooter">
            Todos os direitos reservados © 2023
            </div>
        </footer>
   
</div>
</body>
</html>
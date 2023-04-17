<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
        <header>
            
        </header>
    

       
        <div class="containerForm">
        <form action="/login" method="post">
            
            <fieldset class="fieldsetLogin">
                <br>
                <label for="">Login</label> <br><br>

                <label for="loginUser">Usuário</label> <br>
                <input type="text" name="loginUser" id="loginUser" required placeholder="Informe seu Login"> <br>

                <label for="senhaUser">Senha:</label> <br>
                <input type="password" name="senhaUser" id="senhaUser" required placeholder="Informe sua Senha"> <br>

                <span class="recuperacaoSenha"><a href="#">Esqueci a senha</a></span> <br>

                <input type="submit" value="Entrar" class="enviar-login"> <br>
                <span class="texto-cadastrar"> Não tem conta? <span><a href="cadastro.html">Cadastre-se</a></span></span>

                <button type="submit">Login</button>

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
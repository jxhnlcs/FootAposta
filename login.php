<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça sua aposta já!<br>Crie uma conta ou faça o login</h1>
            <img src="img/high-five-animate.svg" class="left-login-image" alt="Animação portal">
        </div>
        <div class="right-login">
            <div class="card-login" method="post" action="_scripts/autenticar.php">
                <h1>FootAposta</h1>
                <div class="textfield">
                    <label for="usuario">E-mail</label>
                    <input type="text" required name="usuario" placeholder="Digite seu e-mail">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" required name="senha" placeholder="Digite sua senha">
                </div>
                <button class="btn-login">ENTRAR</button>
                <h6 class="linha"> </h6>
                <h2 class="naotem">Não tem cadastro?<a class="cadast" href="cadastro.php"> Cadastre-se</a></h6></h2>
            </div>
        </div>
    </div>
</body>
</html>
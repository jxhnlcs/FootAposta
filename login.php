<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\logincad.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <<img src="/img/logint.png" alt="">
            <img src="img/soccer-animate.svg" class="left-login-image" alt="Animação portal">
        </div>
        <div class="right-login">
            <form class="card-login" method="post" action="_scripts/autenticar.php">
                <h1>FootAposta</h1>
                <div class="textfield">
                    <label for="usuario">E-mail</label>
                    <input type="text" required name="email" id='email' placeholder="Digite seu e-mail">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" required name="senha" id='senha' placeholder="Digite sua senha">
                </div>
                <button class="btn-login">ENTRAR</button>
                <h6 class="linha"> </h6>
                <h2 class="naotem">Não tem cadastro?<a class="cadast" href="cadastro.php"> Cadastre-se</a></h6></h2>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(!empty($_POST['email'])){
    include "_scripts/config.php";
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(validarUsuario($senha,'login')>=1){ ?>
        <script type="text/javascript">
            Swal.fire(
            'Ops!',
            'Verifique se sua senha ou seu e-mail está correto.',
            'question'
            )
        </script>
    <?php }else{

        $sql = "INSERT INTO login (email,senha) VALUES ('$email','$senha')";
        $query = $mysqli->query($sql);

        if($query){ ?>
            <script type="text/javascript">
                Swal.fire({
                    title:'Salvo',
                    text:'Usuario Cadastrado com Sucesso',
                    icon:'success',
                    confirmButtonText:'Ok'
                }).then((result)=>{
                    if(result.isConfirmed){
                        location.href="login.php";
                    }
                })
            </script>
        <?php }else{ ?>  
            <script type="text/javascript">
                swal("Erro");
            </script>
        <?php }
    }


}

?>
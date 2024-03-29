<?php
session_start();
if(empty($_SESSION['email'])){
    echo "<script>alert('Por favor, realize seu login!')
            window.location.href='login.php'</script>";
}else{
    $email = $_SESSION['email'];
}
include "_scripts/functions.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link href="css/iniciobacana.css" rel="stylesheet">
    <!-- Link responsividade css --->
    <!--Boot link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FootAposta - Jogos</title>
</head>
<body>
  <section>
    <div class="circle"></div>
    <header>
      <ul>
      <p class="foottext">FootAposta</p>
      <li class="nav-item">
        <a class="nav-link" href="inicial.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Fases/Grupos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novo1.php">Classisficatorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultados.php">Resultados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sair</a>
      </li>
      </ul>
    </header>
    <div class="content">
      <div class="textBox">
          <h2>Bem-vindo Jogador!<br>Jogue <span>Agora</span></h2>
          <p>O site FootAposta foi criado com o objetivo de apostar em jogos que estarão competindo na COPA DO MUNDO.  </p>
          <button class="botaoo" href="index.php">Dê seus palpites</button>
        </div>
        <div class="ImgBox">
          <img src="./img/fut.png" class="futebol" alt="#">
        </div>
    </div>
  </section>
</html>
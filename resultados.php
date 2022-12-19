<?php
include("_scripts/config.php");

$consulta = "SELECT * FROM dados_jogos";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link href="css/iniciobacana.css" rel="stylesheet">
    <link rel="stylesheet" href="css/inicio.css">
    <!-- Link responsividade css --->
    <!--Boot link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FootAposta - Jogos</title>
  </head>
  <body>
  <section>
    <header id="letras">
      <ul>
      <p class="foottext">FootAposta</p>
      <li class="nav-item">
        <a class="nav-link" href="inicial.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Fases/Grupos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novo1.php">Classificatórias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultados.php">Resultados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sair</a>
      </li>
      </ul>
    </header>
<!-- CARDS -->
<div id="circle" class="circle"></div>
<div class="separar">
<div class="left">
  <div class="card">
    <table>
      <h1>Resultados</h1>
        <?php while($dado = $con->fetch_array()){?>
        <tr class="cardd">
          <td class="flag"><img class="img" src="img/<?php echo $dado['timea']; ?>.png"></td>
          <td class="texto"> <?php echo $dado["timea"];?></td>
          <td class="texto"> <?php echo $dado["rt1"];?></td>
          <td  class="xcaixinha"> X </td>
          <td class="texto"> <?php echo $dado["rt2"];?></td>
          <td class="texto"> <?php echo $dado["timeb"];?></td>
          <td class="flag"><img class="img" src="img/<?php echo $dado['timeb']; ?>.png"></td>
        </tr>

        <?php } ?>
      </table>
    </div>
</div>
  <div class="ImgBoxx">
      <img src="./img/fut.png" class="futebol" id="meubem" alt="#">
  </div>
</div>

<div class="scroll-top active">
            <img src="/img/arrow.png" alt="arrow">
        </div>

<script src="./js/script.js"></script>
<script src="js/scroll.js"></script>
</body>
</html> 
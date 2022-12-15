
<?php include "_scripts\config.php"; ?>
    <div class="container">
        <?php
            $sql = "SELECT * FROM dados_jogos";
            $query = $mysqli->query($sql);
            $i = 1;
            $j = 2;
            while ($dados = $query->fetch_array()){
        ?>
        <div class="matchs-by-group">
            <div class="match">
            Data do Jogo: <?php echo $dados['data']; ?> - 
            Hora do Jogo: <?php echo $dados['horario']; ?> - 
            Estadio: <?php echo $dados['local']; ?> - <br> 
            <img src="img/<?php echo $dados['timea']; ?>.png">
            <?php echo $dados['timea']; ?>
            <input type="text" class=" inp form-control" name="cp<?php echo $i; ?>"> x 
            <input type="text" name="cp<?php echo $j; ?>" class=" inp form-control">
            <img src="img/<?php echo $dados['timeb']; ?>.png"><br>
            </div>
            
        </div>
        <?php $i++;$j++;} ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
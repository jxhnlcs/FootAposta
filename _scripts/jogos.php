<?php
session_start();
?>
<html>
    <body>
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";
$rt1 = $_POST['rt1'];
$rt2 = $_POST['rt2'];



$sql = "SELECT id FROM aposta WHERE rt1 = '$rt1'";
$query = $mysqli->query($sql);
$total = $query->num_rows;

    $sql = "INSERT INTO aposta values (NULL, '$rt1', '$rt2')";
    $query = $mysqli->query($sql);
    
    if($query){?>
            <script type="text/javascript">
                Swal.fire({
                    title:'Salvo',
                    text:'Aposta feita com Sucesso',
                    icon:'success',
                    confirmButtonText:'Ok'
                }).then((result)=>{
                    if(result.isConfirmed){
                        location.href="../index.php";
                    }
                })

            </script>
    <?php }else{ ?>
        <script type="text/javascript">
                swal("Erro");
            </script>
    <?php }


?>


</body>
</html>
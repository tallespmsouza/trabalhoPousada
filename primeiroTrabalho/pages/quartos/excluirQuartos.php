<?php 
    require("../../connection.php");

    $id = $_POST['idDigitado'];
    $sql = "delete from quartos where quartos.idBedroom = '$id'";
    $query = mysqli_query($connection,$sql);

    if($query){
        echo "<script>location.href='exibeQuartos.php'</script>";
    } else {
        echo "
            <script>    
                alert('Não foi possível excluir o QUARTO');
                location.href='exibeQuartos.php';
            </script>
        ";
    }
    
?>
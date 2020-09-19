<?php 
    require("../../connection.php");

    $id = $_POST['idDigitado'];
    $sql = "delete from reservas where reservas.idReservation = '$id'";
    $query = mysqli_query($connection,$sql);

    if($query){
        echo "<script>location.href='exibeReservas.php'</script>";
    } else {
        echo "
            <script>    
                alert('Não foi possível excluir a RESERVA');
                location.href='exibeReservas.php';
            </script>
        ";
    }
    
?>
<?php 
    require("../../connection.php");

    $id = $_POST['idDigitado'];
    $sql = "delete from clientes where clientes.idClient = '$id'";
    $query = mysqli_query($connection,$sql);

    if($query){
        echo "<script>location.href='exibeClientes.php'</script>";
    } else {
        echo "
            <script>    
                alert('Não foi possível excluir o CLIENTE');
                location.href='exibeClientes.php';
            </script>
        ";
    }
    
?>
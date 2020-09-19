<!--Conexão com o bando MySql-->
<?php
    require("../../connection.php");

    $idCliente = $_POST['idCliente'];
    $idQuarto = $_POST['idQuarto'];
    $dataEntrada = $_POST['dataEntrada'];
    $dataSaida = $_POST['dataSaida'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];
    
    $sql = "insert into reservas (fk_idBedroom,fk_idClient,input,output,valueReservation,status) values ('$idQuarto','$idCliente','$dataEntrada','$dataSaida','$valor','$status')";    
    $save = mysqli_query($connection,$sql);

?>

<!DOCTYPE html>
<html lang='pt-br'>

    <head>
        <meta charset="utf-8">
        <title>Pousada Queijo Quente</title>
        <link rel="shortcut icon" href="../../img/logo.png">
        <link rel="stylesheet" href="../../css/index.css">
    </head>

    <body>
        <!--Criando o menu de navegação-->
        <header>
            <nav id="menu">
                <ul>
                    <a href="../../index.php"><li>Início</li></a>
                </ul>
                <ul>
                    <a href="../quartos/bedrooms.php"><li>Quartos</li></a>
                </ul>
                <ul>
                    <a href="../clientes/clients.php"><li>Clientes</li></a>
                </ul>
                <ul>
                    <a href="reservations.php"><li>Reservas</li></a>
                </ul>
            </nav>
        </header>

        <h1 style="margin: 20px;">Criado com Sucesso!</h1>
        <a href="exibeReservas.php" class="visualiza">Visualizar</a>

        <footer id="footer">
            <div class="divFooter" style="float: left;">
                <a href="https://github.com/tallespmsouza" target="_blank">
                    <img src="../../img/github.png" class="img">
                    <spam class="spamFooter">https://github.com/tallespmsouza</spam>
                </a>             
                <img src="../../img/gmail.png" class="img">
                <spam class="spamFooter">talles.pelegrine.machado@gmail.com</spam>
            </div>

            <div class="divFooter" style="float: right; text-align: left;">                
                <spam class="spamFooter" style="text-align: center;">
                    Trabalho HTML, CSS, PHP, MySql / Sistema de Informação / 6° período / Univás<br>
                    Talles Pelegrine<br>
                </spam>            
            </div>           
        </footer>

    </body>

</html>







                    
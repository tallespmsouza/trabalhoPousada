<?php 
    require("../../connection.php");

    $id = $_POST['idDigitado'];
    $sql = "select * from clientes where clientes.idClient = '$id'";
    $query = mysqli_query($connection,$sql);
    $quarto = mysqli_fetch_array($query);
    
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
                    <a href="clients.php"><li>Clientes</li></a>
                </ul>
                <ul>
                    <a href="../reservas/reservations.php"><li>Reservas</li></a>
                </ul>
            </nav>
        </header>

        <h1 style="margin: 20px 10px 10px 10px; text-align: center; color: gray;">Editar Quarto: </h1>

        <?php

            echo "
                <form method='post' action='bdClientes.php' class='formulario'>
                    $quarto[0]
                    <input name='nome' value='$quarto[1]' class='textoArea'>
                    <input name='cpf' value='$quarto[2]' class='textoArea'> 
                    <input name='nascimento' value='$quarto[3]' class='textoArea'>
                    <input name='cidade' value='$quarto[4]' class='textoArea'>
                    <input name='estado' value='$quarto[5]' class='textoArea'>

                    <input type='submit' value='Salvar' class='btnCriar'>
                </form>
            ";

            mysqli_close($connection);

        ?>

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
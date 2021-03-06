<?php
    require("../../connection.php");

    $sql = "select * from quartos";
    $consult = mysqli_query($connection,$sql);

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
                    <a href="bedrooms.php"><li>Quartos</li></a>
                </ul>
                <ul>
                    <a href="../clientes/clients.php"><li>Clientes</li></a>
                </ul>
                <ul>
                    <a href="../reservas/reservations.php"><li>Reservas</li></a>
                </ul>
            </nav>
        </header>

        <h1 style="margin: 20px 10px 10px 10px; text-align: center; color: gray;">Registro de Quartos: </h1>

        <?php

            echo "
            <div style='width: 50%; margin-left: 29%; padding: 10px; text-align: left;'>
                <form method='post' action='excluirQuartos.php'>
                    <input type='text' name='idDigitado' placeholder='ID DO QUARTO' autofocus required style='width: 30%; padding: 10px; float: left; border: 1px solid lightgray; border-radius: 5px;'>
                    <input type='submit' value='Excluir' style='margin: 5px; padding: 5px; color: orange; background-color: white; border: 1px solid lightgray; border-radius: 5px;'>
                </form>
                <form method='post' action='editarQuartos.php' style='margin-top: 10px;'>
                    <input type='text' name='idDigitado' placeholder='ID DO QUARTO' autofocus required style='width: 30%; padding: 10px; float: left; border: 1px solid lightgray; border-radius: 5px;'>
                    <input type='submit' value='Editar' style='margin: 5px; padding: 5px; color: orange; background-color: white; border: 1px solid lightgray; border-radius: 5px;'>
                </form>
            </div>";

            echo "<section class='exibir'>";
                
                while($showRegister = mysqli_fetch_array($consult)){
                            
                    $id = $showRegister[0];
                    $number = $showRegister[1];
                    $type = $showRegister[2];
                    $value = $showRegister[3];
                    $status = $showRegister[4];

                    echo "<article style='margin: 10px; padding: 10px 10px 10px 40px; border-radius: 10px; background-color:  rgb(243, 174, 108); color: white;'>";
                        echo "<b>ID do quarto:</b> $id<br>";
                        echo "<b>Número:</b> $number<br>";
                        echo "<b>Tipo:</b> $type<br>";
                        echo "<b>Valor:</b> $value<br>";
                        echo "<b>Status:</b> $status<br>";
                    echo "</article>";
                            
                }
                
            echo "</section>";

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

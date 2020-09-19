<!--Criando a página principal da Pousada-->
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

        <form method="post" action="bdReservas.php" class="formulario">
            <input name="idCliente" placeholder="ID cliente" class="textoArea" required>
            <input name="idQuarto" placeholder="ID quarto" class="textoArea" autofocus required>
            <input name="dataEntrada" placeholder="Data de entrada" class="textoArea" required>
            <input name="dataSaida" placeholder="Data de saída" class="textoArea" required>
            <input name="valor" placeholder="Valor da reserva" class="textoArea" required>

            <select name="status" class="selectArea" required>
                <option value="">Selecionar</option>
                <option value="Reservado">Reservado</option>
                <option value="Chekin">Chekin</option>
            </select>

            <input type="submit" value="Criar" class="btnCriar">
        </form>

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
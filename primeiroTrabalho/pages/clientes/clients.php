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
                    <a href="clients.php"><li>Clientes</li></a>
                </ul>
                <ul>
                    <a href="../reservas/reservations.php"><li>Reservas</li></a>
                </ul>
            </nav>
        </header>

        <form method="post" action="bdClientes.php" class="formulario">
            <input name="nome" placeholder="Nome completo" class="textoArea" autofocus required>

            <input name="cpf"placeholder="CPF" class="textoArea" required>

            <input name="nascimento" placeholder="Nascimento" class="textoArea" required>

            <input name="cidade" placeholder="Cidade" class="textoArea" required>

            <input name="estado" placeholder="Estado" class="textoArea" required>

            <input type="submit" value="Criar" class="btnCriar">
        </form>

        <a href="exibeClientes.php" class="visualiza">Visualizar</a>

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
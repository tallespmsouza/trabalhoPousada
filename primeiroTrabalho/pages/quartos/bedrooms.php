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

        <form method="post" action="bdQuartos.php" class="formulario">
            <input placeholder="Número da porta" name="numero" class="textoArea" autofocus required>

            <select class="selectArea" name="tipo" required>
                <option value="">Selecionar</option>
                <option value="Simples">Simples</option>
                <option value="Duplo">Duplo</option>
                <option value="Triplo">Triplo</option>
            </select>

            <input placeholder="Valor da diária" name="valor" class="textoArea" required>

            <select class="selectArea" name="statusQuarto" required>
                <option value="">Selecionar</option>
                <option value="Livre">Livre</option>
                <option value="Ocupado">Ocupado</option>
                <option value="Bloqueado">Bloqueado</option>
            </select>

            <input type="submit" value="Criar" class="btnCriar">
        </form>

        <a href="exibeQuartos.php" class="visualiza">Visualizar</a>

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
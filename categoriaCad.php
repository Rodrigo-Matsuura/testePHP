<?php
    session_start();
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Categorias</title>
    </head>
    <body>
        <div>
            <h2>Cadastrar</h2>
            <br>
            <form method = "POST" action = "processaCad_Categoria.php">
                <label>Nome: </label><input type = "text" name="name" class="enviar" required/>
                <br>
                <br>
                <input type="submit" value="Salvar" class="button" />   
            </form>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <ul>
                <li><a href="/categoria.php">Voltar</a></li>
                <li><a href="/index.php">Início</a></li>
            </ul>
        </div>
    </body>
</html>
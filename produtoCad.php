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
        <title>Produtos</title>
    </head>
    <body>
        <div>
        <h2>Cadastrar</h2>
        <form method = "POST" action = "processaCad_Produto.php">
            <br>
            <br>
            <label>Nome: </label><input type = "text" name="name" class="enviar" required />
            <br>
            <br>
            <label>Categoria: </label>
            <select name="cat_Id" required>
                <option>Selecione uma opção</option>
                    <?php
                        $busca = "SELECT * FROM categories";
                        $dados = mysqli_query($conn, $busca);
                        while ($resultado = mysqli_fetch_assoc($dados)) {
                    ?>
                <option value ="<?php echo $resultado['id'];?>"> <?php echo $resultado['name']; ?>
                    <br>
                </option>
                <?php
                    }
                ?>
            </select>
            <br>
            <br>
            <input type="submit" value="Salvar" />
        </form>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <ul>
            <li><a href="/produto.php">Voltar</a></li>
            <li><a href="/index.php">Início</a></li>
        </ul>
        </div>
    </body>
</html>
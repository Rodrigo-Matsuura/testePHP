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
        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }else{
                $id = '';
            }
            
            $sql = "SELECT * FROM categories WHERE id like $id";

            $dados = mysqli_query($conn, $sql);

            $linha = mysqli_fetch_assoc($dados);

        ?>
        <div>
            <h2>Editar</h2>
            <br>
            <form method = "POST" action = "processaEdit_Categoria.php">
                <label>Nome: </label><input type = "text" name="name" required value="<?php echo $linha['name']; ?>" />
                <br>
                <br>
                <input type="submit" value="Salvar" class="button" />
                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" />
            </form>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <ul>
                <li><a href="/categoriaPes.php">Voltar</a></li>
                <li><a href="/index.php">Início</a></li>
            </ul>
        </div>
    </body>
</html>
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
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }else{
                    $id = '';
                }
                
                $sql = "SELECT * FROM products WHERE id like $id";

                $dados = mysqli_query($conn, $sql);

                $linha = mysqli_fetch_assoc($dados);

            ?>
            <h2>Editar</h2>
            <br>
            <form method = "POST" action = "processaEdit_Produto.php">
                <label>Nome: </label><input type = "text" name="name" required value="<?php echo $linha['name']; ?>" />
                <br>
                <br>
                <label>Categoria: </label><select name="cat_Id" required>
                    <option>Selecione uma opção</option>
                    <?php
                        $busca = "SELECT * FROM categories";
                        $dados = mysqli_query($conn, $busca);
                        while ($resultado = mysqli_fetch_assoc($dados)) {?>
                            <option value ="<?php echo $resultado['id'];?>"> <?php echo $resultado['name']; ?></option>
                            <?php
                            }
                            ?>
                </select>
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
                <li><a href="/produtoPes.php">Voltar</a></li>
                <li><a href="/index.php">Início </a></li>
            </ul>
        </div>
    </body>
</html>
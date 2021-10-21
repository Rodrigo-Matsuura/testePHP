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
        if(isset($_POST['pesquisa'])){
            $pesquisa = $_POST['pesquisa'];
        }else{
            $pesquisa = '';
        }
        
        include "conexao.php";
        $sql = "SELECT * FROM categories WHERE name LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);
        
        ?>
        <div>
            <h2>Pesquisar</h2>
            <form action="categoriaPes.php" method="POST">
                <input type="search" placeholder="Buscar" name="pesquisa" class="enviar" />
                <button type="submit">Buscar</button>
            </form>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                    </tr>
                </thead>
                <tbody>
                        
                <?php
                while($linha = mysqli_fetch_assoc($dados)){
                    $id = $linha['id'];
                    $name = $linha['name'];
                    $created = date('H:i | d/m/Y', strtotime($linha['created']));
                    $updated = date('H:i | d/m/Y', strtotime($linha['updated']));   
                    echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$created</td>
                        <td>$updated</td>
                        <td><a href='/categoriaEdi.php?id=$id'>Editar</a><a href='/categoriaExc.php?id=$id'>Deletar</a></td>
                    </tr>";
                    }
                    
                ?>
                <form method='post' action='processaExcl_Categoria.php'>
                </tbody>
            </table>
            <ul>
                <li><a href="/categoria.php">Voltar</a></li>
                <li><a href="/index.php">Início</a></li>
            </ul>
        </div>
    </body>
</html> 
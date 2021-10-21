<?php
    session_start();
    include("conexao.php");
    $id = $_POST["id"];
    $cat_Id = $_POST['cat_Id'];
    $name = $_POST['name'];
    $sql = "UPDATE `products` set`name` = '$name', `category_id`= '$cat_Id' WHERE id = $id";
    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Registro alterado com sucesso</p>";
    }else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao alterar, verifique as informações</p>";
    }
    header("Location: produtoEdi.php?id=$id");
?>

<?php
    session_start();
    include("conexao.php");
    $id = $_POST["id"];
    $name = $_POST['name'];
    $sql = "UPDATE `categories` set`name` = '$name' WHERE id = $id";
    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Registro alterado com sucesso</p>";
    }else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao alterar, verifique as informações</p>";
    }
    header("Location: categoriaEdi.php?id=$id");
?>

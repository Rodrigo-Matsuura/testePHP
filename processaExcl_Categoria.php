<?php
    session_start();
    include("conexao.php");
    $id = $_POST["id"];
    $name = $_POST['name'];
    $sql = "DELETE FROM `categories` WHERE`id` = '$id'";
    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Registro excluído</p>";
    }else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao excluir, verifique as informações</p>";
    }
    header("Location: categoriaPes.php");
?>

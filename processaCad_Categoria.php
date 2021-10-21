<?php
    session_start();
    include("conexao.php");
    $name = $_POST['name'];
    $sql = "INSERT INTO `categories`(`name`) VALUE ('$name')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Registro adicionado com sucesso</p>";
    }else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao adicionar, verifique as informações</p>";
    }
    header("Location: categoriaCad.php");
?>

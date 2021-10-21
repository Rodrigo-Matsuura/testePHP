<?php
    session_start();
    include("conexao.php");
    $cat_Id = $_POST['cat_Id'];
    $name = $_POST['name'];
    $sql = "INSERT INTO `products`(`category_id`, `name`) VALUES ('$cat_Id', '$name')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Registro adicionado com sucesso</p>";
    }else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao adicionar, verifique as informações</p>";
    }
    header("Location: produtoCad.php");
?>

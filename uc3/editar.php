<?php
    $id = $_GET["id"];

    include('conexao.php');

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];


    $query = "UPDATE `tarefa` SET `titulo`='$titulo',`descricao`='$descricao' WHERE `id` = '$id'";
    $sql = mysqli_query($conexao, $query);

    /* header("location: form.php"); */
?>


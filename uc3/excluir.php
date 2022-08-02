<?php

require('conexao.php');

$id = $_GET["id"];

$query = "DELETE FROM `tarefa` WHERE `tarefa`.`id` = $id";

$sql = mysqli_query($conexao, $query);

header("location: form.php");

?>
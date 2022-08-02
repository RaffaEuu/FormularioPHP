<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'tarefas';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    echo "Falha ao estabelecer conexão!";
} else{
    ($conexao);
    /* echo "oi"; */
}


?>
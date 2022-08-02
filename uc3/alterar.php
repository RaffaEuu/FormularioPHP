<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $id = $_GET["id"];


    require('conexao.php');


    $query = "SELECT `titulo`, `descricao` FROM `tarefa` WHERE `id`= $id;";

    $sql = mysqli_query($conexao, $query);
    
    $row = mysqli_fetch_assoc($sql);

    $titulo = $row['titulo'];
    $descricao = $row['descricao'];
    
    /* header("location: form.php"); */

    ?>

    <h2>CRUD</h2>
    <form action="editar.php?id=<?php echo $row['id'] ?>" method="post">

        <fieldset>
            <legend>Cadastro de tarefas</legend>
            <p>
                <label for="titulo" >titulo</label>
                <input type="text" name="titulo" placeholder="O poço" value="<?php echo $titulo ?>">
            </p>
            <p>
                <label for="descricao">Descrição</label>
                <textarea name="descricao" cols="30" rows="10" placeholder="Filme Filme Filme"> <?php echo $descricao ?> </textarea>
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </fieldset>

    </form>


</body>

</html>
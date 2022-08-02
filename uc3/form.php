<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>

<body>
    <h2>CRUD</h2>

    <form action="processa.php " method="post">

        <fieldset>
            <legend>Cadastro de tarefas</legend>
            <p>
                <label for="titulo">titulo</label>
                <input type="text" name="titulo" placeholder="O poço">
            </p>
            <p>
                <label for="descricao">Descrição</label>
                <textarea name="descricao" cols="30" rows="10" placeholder="Filme Filme Filme"></textarea>
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </fieldset>

    </form>

    <table border="1">
        <thead>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Data de criação</th>
            <th>ação</th>
        </thead>
        <tbody>
            <?php
            include('conexao.php');

            $query = "SELECT * FROM `tarefa`";

            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_assoc($sql)) { ?>
            <tr>
                <td> <?php echo $row['titulo']?> </td>
                <td> <?php echo $row['descricao']?> </td>
                <td> <?php echo $row['data']?> </td>
                <td> <a href="alterar.php?id=<?php echo $row['id'] ?>">Alterar</a>
                &nbsp; &nbsp; <!-- adiciona 2 espaços --> 
                <a href="excluir.php?id=<?php echo $row['id'] ?>">Excluir</a>
                </td>
            </tr>

           <?php }?>
        </tbody>
    </table>

</body>

</html>
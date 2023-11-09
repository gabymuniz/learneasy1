<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Listar Usuários</title>
</head>

<body>
    <style>
        body {
            background-color: #EFEDC7;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>
    <form method="post" action="listar.php">

        <label for="">Buscar pelo nome: </label>
        <input type="text" name="nome" class="dado" placeholder="Nome" required>

        <button type="submit" value="Buscar">Buscar</button>
    </form>
    <?php
    // Verifica se foi enviado um nome pelo método POST
    if (isset($_POST['nome'])) {
        $nome_filtrar = mysqli_real_escape_string($conn, $_POST['nome']);
        $result_usuario = "SELECT * FROM usuario WHERE nome = '$nome_filtrar'";
    } else {
        $result_usuario = "SELECT * FROM usuario";
    }

    $resultado_usuario = mysqli_query($conn, $result_usuario);

    // Verifique se a consulta foi bem-sucedida antes de tentar obter os resultados
    if (!$resultado_usuario) {
        die("Erro na consulta: " . mysqli_error($conn));
    }

    while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
        echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "Sobrenome: " . $row_usuario['sobrenome'] . "<br>";

        echo "E-mail: : " . $row_usuario['email'] . "<br>";

        echo "Instituição de Ensino: " . $row_usuario['instensino'] . "<br>";

        echo "Curso: " . $row_usuario['curso'] . "<br>";
        echo "<hr>";
    }
    ?>
</body>

</html>
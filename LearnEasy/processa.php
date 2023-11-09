

<?php

session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email'); // Corrigido aqui
$instensino = filter_input(INPUT_POST, 'instensino');
$curso = filter_input(INPUT_POST, 'curso');
$senha = filter_input(INPUT_POST, 'senha'); // Corrigido aqui

/*echo "Nome: $nome <br>";
echo "Sobrenome: $sobrenome <br>";
echo "E-mail: $email <br>";
echo "Instensino: $instensino <br>";
echo "Curso: $curso <br>";
*/

$sql = "INSERT INTO usuario (nome, sobrenome, email, instensino, curso, senha) VALUES ('$nome','$sobrenome', '$email', '$instensino', '$curso', '$senha')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Registro inserido com sucesso!";
    header("Location: login.html");
} else {
    echo "Erro na inserção do registro: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

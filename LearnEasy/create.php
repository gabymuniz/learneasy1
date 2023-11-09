<?php
include 'conexao.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $sobrenome =$_POST['sobrenome'];
    $email = $_POST['email'];
    $instensino = $_POST['instensino'];
    $curso = $_POST['curso'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (nome, sobrenome, email,instensino,curso,senha) VALUES ('$nome','$sobrenome', '$email', '$instensino', '$curso', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>

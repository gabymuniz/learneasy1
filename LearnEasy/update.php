<?php
include 'conexao.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $novo_nome = $_POST['novo_nome'];
    $novo_sobrenome = $_POST['novo_sobrenome'];
    $novo_email = $_POST['novo_email'];
    $novo_instensino = $_POST['novo_instensino'];
    $novo_curso = $_POST['novo_curso'];
    

    $sql = "UPDATE tabela SET nome = '$novo_nome', sobrenome= '$novo_sobrenome, email = '$novo_email', instensino = '$novo_instensino', curso = '$novo_curso', WHERE email = $email";

    if (mysqli_query($conn, $sql)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>

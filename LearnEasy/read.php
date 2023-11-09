<?php
include 'conexao.php';

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " Nome: " . $row['nome'] ."Sobrenome:".$row['sobrenome'] . " Email: " . $row['email'] . "Instituição de Ensino: ".$row['instensino']. "Curso: ". $row['curso']. "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>

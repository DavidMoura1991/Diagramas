<?php
include 'config.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO alunos (nome, cpf, data_nascimento, telefone)
        VALUES ('$nome', '$cpf', '$data', '$telefone')";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Erro: " . $conn->error;
}
?>
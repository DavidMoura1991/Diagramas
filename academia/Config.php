<?php
$conn = new mysqli("localhost", "root", "", "academia");

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>
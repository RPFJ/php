<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root","1234");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (desc_login, desc_senha) VALUES (:LOGIN,:PASSWORD)");

$login = "jose";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo("Dados inseridos com sucesso"); 

?>

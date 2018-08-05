<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root","1234");

$stmt = $conn->prepare("DELETE tb_usuarios WHERE id_usuario = :ID");


$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo("Dados excluidos com sucesso"); 

?>

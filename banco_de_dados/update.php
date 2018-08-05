<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root","1234");

$stmt = $conn->prepare("UPDATE tb_usuarios SET (desc_login = :LOGIN, desc_senha = :PASSWORD) WHERE id_usuario = :ID");

$login = "novo_nome";
$password = "nova_senha";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo("Dados alterados com sucesso"); 

?>

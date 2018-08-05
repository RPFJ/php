<?php
$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root","1234");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");
$id=2;

$stmt->execute(array($id));

//$conn->rollBack();

$conn->commit(); 

echo "DELETE OK"; 

?>
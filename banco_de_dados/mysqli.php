<?php

$conn = new mysqli("localhost","root", "1234", "dbphp7");

if($conn->connect_error){
    echo "Error: ". $conn->connect_error; 
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (desc_login, desc_senha) VALUES (? , ? )"); 

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute(); 
?>
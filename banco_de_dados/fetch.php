<?php

$conn = new mysqli("localhost","root", "1234", "dbphp7");

if($conn->connect_error){
    echo "Error: ". $conn->connect_error; 
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY desc_login");

$data = array(); 
while($row = $result->fetch_array()){
    array_push($data, $row);
}

echo json_encode($data); 
?>
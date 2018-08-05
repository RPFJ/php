<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "1234");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY desc_login");
$stmt->execute(); 

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    foreach($row as $key => $value){
        echo "<strong>".$key.": </strong>".$value. "</br>";
    }

    echo "------------------------------------</br>"; 
}




?>
<?php

require_once("class/config.php");

// $root = new Usuario();
// $root->loadById(1);

// echo $root;


// $lista = Usuario::getList();

// echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

$usuario = new Usuario();

$usuario->login("login", "senha");

echo $usuario; 

?>
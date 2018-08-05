<?php

require_once("class/config.php");

// $root = new Usuario();
// $root->loadById(1);
// echo $root;


// $lista = Usuario::getList();
// echo json_encode($lista;
//$search = Usuario::search("jo");
//echo json_encode($search);

//$usuario = new Usuario();
//$usuario->login("login", "senha");
//echo $usuario; 


// $aluno = new Usuario("usuario", "senha"); 
// $aluno->insert(); 
// echo $aluno; 

$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "senhaprofessor");

echo $usuario;
?>
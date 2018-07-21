<?php

require_once("config.php"); 

use Cliente\Cadastro; 

$cad = new Cadastro();

$cad->setNome("Dijalma Sindeaux");
$cad->setEmail("dijalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda(); 
?>
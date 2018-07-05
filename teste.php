<?php



$nome = "rafael";

echo ucwords(strtolower($nome))."<br/>";

$palavra = "mae";
$frase = "A repeticao é a mae da retencao.";
$q = strpos($frase, "mae");

var_dump($q);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 =  substr($frase, $q + strlen($palavra), strlen($frase));


echo "<br";

var_dump($texto2);
 



?>

<?php

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");


echo "Arquivo removido com sucesso";  


//apagando todos os arquivos no diretorio

if(!isdir("images")) mkdir("images");

foreach(scandir("images") as $item){
    if(!in_array($item, array(".", ".."))){

        unlink("images/".$item); 
    }
}

?>
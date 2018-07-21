<?php

/*function __autoload($className){
    //mesma pasta
    require_once ("$className.php");

}*/

function incluirClasses($className){
    if(file_exists($className.".php") === true){
        require_once($className.".php");
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(
    function ($className){
        if(file_exists("abstract" . DIRECTORY_SEPARATOR . $className.".php") === true){
            require_once("abstract" . DIRECTORY_SEPARATOR . $className.".php");
        }
    }
);

$carro = new DelRey(); 
$carro->acelerar(80);

?>
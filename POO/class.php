<?php

class Pessoa {

    public $nome;
    
    public function falar(){

        return "O meu nome é: ".$this->nome;

    }

}    

$raphael = new Pessoa();
$raphael->nome = "Raphael Ferreira";
echo $raphael->falar(); 


?>
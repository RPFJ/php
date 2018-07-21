<?php

class Documento{

    private $numero;


    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}

class CPF extends Documento{
    public function validar():bool{
        $numeroCPF = $this->getNumero();

        return true;
    }
}

$doc = new CPF();

$doc->setNumero("123456789-44");

$doc->validar(); 

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero(); 

?>

<?php

class Endereco{
 
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){

        var_dump("DESTRUIR");
        
    }

    public function __toString(){
        return  $this->logradouro.", ".$this->numero." - ".$this->cidade; 
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }


    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }
}

$meuEndereco = new Endereco("Logradouro", "Numero", "Cidade");

//var_dump($meuEndereco);
echo"<br>";
//unset($meuEndereco);
echo"<br>";


echo $meuEndereco;




?>

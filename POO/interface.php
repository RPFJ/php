<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);


}

class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "O veícuo acelerou até ". $velocidade . " km/h";
    }

    public function frenar($velocidade){
        echo "O veícuo frenou até ". $velocidade . " km/h";

    }

    public function trocarMarcha($marcha){
        echo "O veícuo trocou a marcha para a  ". $marcha . " marcha";
    }
}

$carro = new Civic(); 

$carro->trocarMarcha(1); 

?>

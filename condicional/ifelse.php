<?php
    $qualASuaIdade = 15;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if($qualASuaIdade < $idadeCrianca){
        echo "Crianca";

    }else if ($qualASuaIdade < $idadeMaior){
        echo "Adolescente";
    } else if($qualASuaIdade < $idadeMelhor){
        echo "Adulto";
    }else {
        echo "adulto";
    }

    echo "<br>";

    echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>
<?php
    /*
    $condicao = true;

    while ($condicao){
        $numero = rand(1, 10);

        if($numero === 3){

            echo "Três ";
            $condicao = false;
        }

        echo $numero . " ";
    }
    */
$total = 150;
$desconto = 0.9;

do {

    $total *= $desconto;

} while($total > 100);

echo $total;

?>
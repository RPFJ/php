<?php
    
function test($callback){
    

    //Processo lento 

    $callback();

}

test(function(){
    echo "Terminou!";
}); 



$fn = function ($a){
    var_dump($a);

};

$fn ("<br>Oi!"); 

?>

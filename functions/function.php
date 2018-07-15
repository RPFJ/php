<?php

function ola($texto = "mundo", $periodo = "Bom dia!"){

   return  "Olá $texto, $periodo !<br>";

}

function salario(){
    return 946.00;
}

function argumentos(){
    return $argumentos = func_get_args();

}




//echo "José recebeu 3 salários: ". salario() * 3 ;

//echo ola(); 
//echo ola("", "Boa noite!");
//echo ola("Rafael", "Boa tarde");
//echo ola("Kathlleen", "");


var_dump(argumentos("Bom dia", "Ola")); 


/*$frase = ola(); 
echo strlen($frase);*/




?>
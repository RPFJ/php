<?php

//
$pessoas = array();

    array_push ($pessoas, array(
        'nome'=> 'Rafael',
        'idade' => 21
    ));

    array_push ($pessoas, array(
        'nome'=> 'Kathllleen',
        'idade' => 20
    ));

    print_r($pessoas [0]['nome']);

    echo json_encode($pessoas) . "<br>"; 

    $json = 'Rafael[{"nome":"Rafael","idade":21},{"nome":"Kathllleen","idade":20}]';
    
    
    json_decode($json, true);

    var_dump ($json);





?>
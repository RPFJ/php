<?php

//formato de data
echo date("d/m/Y H:i:s"); 

echo "</br>";
//fixa a data
echo date("d/m/Y H:i:s", 1530753300); 

echo "</br>";
echo time(); 

echo "</br>";
echo "</br>";

$ts = strtotime("2001-09-11"); 

echo date("l, d/m/Y", $ts );

echo "</br>";echo "</br>";


strtotime("now");
strtotime(""); 
strtotime("+1 week");
?>
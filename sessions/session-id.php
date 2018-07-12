<?php
require_once ("config.php");

echo session_id(); 


session_regenerate_id(); 


session_id ('avrovhgsquo63baqpe9j0npaof');
echo "<br>"; 
echo session_id(); 

var_dump[$_SESSION]; 
?>
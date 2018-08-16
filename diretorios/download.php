<?php

$link = "https://claret-portal-sso.s3.amazonaws.com/portal-sso/assets/backend/claretiano-69x55-95428a414422718219b804e10030a88b26939edf31eb8683a1833e1a3048b610.png";

$content = file_get_contents($link);

$parse = parse_url($link); 

$basename = basename($parse["path"]); 


//$basename representa o nome do arquivo que sera gerado
$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file); 

?>

<img src="<?=$basename?>">

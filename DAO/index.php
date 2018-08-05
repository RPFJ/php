<?php

require_once("class/config.php");

$root = new Usuario();

$root->loadById(1);

echo $root;

?>
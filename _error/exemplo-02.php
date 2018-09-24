<?php

error_reporting(E_ALL & ~E_NOTICE);//Essa linha seria configurada no arquivo config.php

$nome = $_GET["nome"];

echo $nome;

echo 100/0;
?>
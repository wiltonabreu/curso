<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "123456");
$conn->exec("set names utf8");

$stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) values(:LOGIN,:PASSWORD)");

$login = "José Álvez";
$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);


$stmt->execute();


echo "Dados Inseridos com sucesso!!!";


?>
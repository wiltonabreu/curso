<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "123456");
$conn->exec("set names utf8");

$stmt = $conn->prepare("DELETE from tb_usuarios WHERE idusuario = :ID");

//$login = "Maria";
//$password = "masedfg";
$id = 4;

//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Dado deletado com sucesso!!!";


?>
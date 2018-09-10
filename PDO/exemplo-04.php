<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "123456");
$conn->exec("set names utf8");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin =:LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Maria";
$password = "masedfg";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Dados Alterados com sucesso!!!";


?>
<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "123456");

$conn->beginTransaction();
//$conn->exec("set names utf8");


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

//$login = "Maria";
//$password = "masedfg";
$id = 3;

//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":PASSWORD", $password);


$stmt->execute(array($id));



$conn->rollback();


//$conn->commit();
echo "Dado deletado com sucesso!!!";


?>
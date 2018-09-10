<?php 

 $conn = new mysqli("localhost", "root", "123456", "dbphp7");

 if($conn->connect_error){
 		echo "Error: " . $conn->connect_error;
 }

 $stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values(?,?)");

$login = "user";
$pass = "12345";

 $stmt->bind_param("ss",$login,$pass); // ss segnifica string string.
 $stmt->execute();

$login = "root";
$pass = "!@#$AW";

$stmt->execute();
?>
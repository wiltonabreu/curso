<?php 

 $conn = new mysqli("localhost", "root", "123456", "dbphp7");

 if($conn->connect_error){
 		echo "Error: " . $conn->connect_error;
 }

?>
<?php 

 $conn = new mysqli("localhost", "root", "123456", "dbphp7");

 if($conn->connect_error){
 		echo "Error: " . $conn->connect_error;
 }

 $result = $conn->query("Select * from tb_usuarios order by deslogin");

$data = array();

while ($row = $result->fetch_array()) {
	array_push($data, $row);
}

echo json_encode($data);

?>
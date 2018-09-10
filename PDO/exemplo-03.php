<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "123456");

$stmt = $conn->prepare("select * from tb_usuarios");

$stmt->execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

//var_dump($results);
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>" . $value."<br/>";
	}
	echo "=====================================<br>";
}

?>
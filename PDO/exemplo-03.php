<?php 

//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost/SQLEXPRESS;ConnectionPooling=0","sa","123.qwe!@#");
$conn = new PDO("dblib:host=localhost;dbname=sgt","sa","123.qwe!@#");

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
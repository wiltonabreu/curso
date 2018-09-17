<?php

$images = scandir("images");
//retorna um array

//var_dump($images);
$data = array();
foreach ($images as $img) {
	if (!in_array($img, array(".",".."))) {
		
		$filename = "images" .DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);
		$info["size"] = filesize($filename); 
		$info["modified"] = date("d/m/Y H:i:s", fileatime($filename));
		$info["url"] = "http://localhost/curso/DIR/" . str_replace("\\", "/", $filename);


		array_push($data, $info);
	}
}

echo json_encode($data);
?>
<?php




function trataNome($name){
	if(!$name){
		throw new Exception("Nenhum nome foi informado: <br>", 1);
		
	}
	echo ucfirst($name)."<br>";
}
 

try {
	
	trataNome("maria");
	trataNome("");
	

} catch (Exception $e) {
	
	echo $e->getMessage();
		
} finally{
	echo "Executou o Try!<br>";
}

?>
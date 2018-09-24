<?php


try {
	
	throw new Exception("Houve um erro", 400);
	

} catch (Exception $e) {
	
	echo json_encode(array(
		"Message"=>$e->getMessage(),
		"Line"=>$e->getLine(),
		"File"=>$e->getFile(),
		"code"=>$e->getCode()
	));
}

?>
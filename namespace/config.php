<?php 
spl_autoload_register(function($nameClass){
	
	$dirClass = "class";

	//Em servidores Windows por causa estrutura de diretórios 
	// a função será definida da seguinte forma:

	//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php"; 


	//Modelo em servidores Linux:
	$filename = $dirClass . DIRECTORY_SEPARATOR . str_replace('\\', '/', $nameClass .".php");

	/*
		Mas como nada é perfeito, a solução acima não funciona em servidores linux, embora algumas pessoas já tenham solicitado reparo, parece que o problema ocorre por causa do path separator, o autoloader padrão tenta importar arquivos utilizando o path separator \ utilizado nos namespaces, o que é inválido para sistemas Linux/Unix, mas no windows funciona, enfim, enquanto esperamos essa correção precisamos definir um callback(função) que contorne essa situação e funcione em qualquer servidor, confira:
					
		<?php
		spl_autoload_register(function ($class) {
		    require_once(str_replace('\\', '/', $class . '.php'));
		});
		?>

	*/

	if (file_exists($filename)){
		require_once($filename);
		
	}
});

?>
<?php 
	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	
	$cad->setNome("Djalma Sindeaux");
	$cad->setEmail("djalma@hcolde.com.br");
	$cad->setSenha("123456");
	

	//echo $cad;
	$cad->registrarVenda();
 ?>
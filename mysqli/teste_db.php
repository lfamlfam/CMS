<?php
try{
	require('db.php');
		
	$query = 'SELECT * FROM tb_usuario';
	$objQuery = $objDb->query($query);
	echo "<pre>";
	while($resultado = $objQuery->fetch_assoc()){
		print_r($resultado);
	}
	echo "</pre>";
	$objQuery->close();
	
	/*
	$query = 'INSERT INTO tb_usuario
											(id_usuario, nome_usuario, email_usuario, senha_usuario) 
											VALUES 
											(4,"Jose","j@j.com","1122")';
	if(!$objDb->query($query)){
		throw new Exception($objDb->error);
	}
	*/
	
	/*
	$query = 'UPDATE tb_usuario SET email_usuario = "jose@j.com" WHERE id_usuario = 4'; 
											
	if(!$objDb->query($query)){
		throw new Exception($objDb->error);
	}
	*/
	
	/*
	$query = 'DELETE FROM tb_usuario WHERE id_usuario = 4'; 
											
	if(!$objDb->query($query)){
		throw new Exception($objDb->error);
	}
	*/
	
	$query = 'SELECT * FROM tb_usuario';
	$objQuery = $objDb->query($query);
	echo "<pre>";
	while($resultado = $objQuery->fetch_assoc()){
		print_r($resultado);
	}
	echo "</pre>";
	$objQuery->close();
	
}catch(Exception $objException){
	var_dump($objException);
}
?>

<?php
try{
	if(!$objDb = new mysqli('localhost','root','','test')){
		throw new Exception('Erro ao conectar ao MySQL');
	}
}catch(Exception $objException){
	var_dump($objException);
}
?>

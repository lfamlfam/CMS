<?php
try{
	$objDb = new PDO(	'mysql:host=127.0.0.1;dbname=test;charset=utf8',
						'root','', 
						array(	PDO::ATTR_EMULATE_PREPARES => false,                                                                                           
								    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
}catch(PDOException $objException){
	echo $objException;
}
?>

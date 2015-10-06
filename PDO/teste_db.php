<?php
try{
	require('db.php');
		
	//$objQuery = $objDb->prepare('SELECT * FROM tb_usuario WHERE id_usuario = ?');
	//$objQuery->execute(array(0=>1));

	$objQuery = $objDb->prepare('SELECT * FROM tb_usuario');
	$objQuery->execute();
	echo "<pre>";
	while($resultado = $objQuery->fetch(PDO::FETCH_ASSOC)){
		print_r($resultado);
	}
	echo "</pre>";
	unset($objQuery);

	
	/*
	$id = 3;
	$nome = 'Manoel';
	$email = 'm@m.com';
	$senha = '78236478263';
	
	$objQuery = $objDb->prepare('	INSERT INTO tb_usuario 
									(id_usuario, nome_usuario, email_usuario, senha_usuario) 
									VALUES 
									(:id_usuario, :nome_usuario, :email_usuario, :senha_usuario)');
	$objQuery->bindParam(':id_usuario',$id);
	$objQuery->bindParam(':nome_usuario',$nome);
	$objQuery->bindParam(':email_usuario',$email);
	$objQuery->bindParam(':senha_usuario',$senha);
	var_dump($objQuery->execute());
	unset($objQuery);
	*/
	
	/*
	$id = 3;
	$senha = '22222';
	
	$objQuery = $objDb->prepare('	UPDATE tb_usuario
									SET
									senha_usuario = :senha_usuario
									WHERE
									id_usuario = :id_usuario');
	$objQuery->bindParam(':id_usuario',$id);
	$objQuery->bindParam(':senha_usuario',$senha);
	var_dump($objQuery->execute());
	unset($objQuery);
	*/
	/*
	$id = 3;
	
	$objQuery = $objDb->prepare('	DELETE FROM tb_usuario
									WHERE
									id_usuario = :id_usuario');
	$objQuery->bindParam(':id_usuario',$id);
	var_dump($objQuery->execute());
	unset($objQuery);
	*/
	
	$objQuery = $objDb->prepare('SELECT * FROM tb_usuario');
	$objQuery->execute();
	echo "<pre>";
	while($resultado = $objQuery->fetch(PDO::FETCH_ASSOC)){
		print_r($resultado);
	}
	echo "</pre>";
	unset($objQuery);
	
}catch(PDOException $objException){
	var_dump($objException);
}
?>

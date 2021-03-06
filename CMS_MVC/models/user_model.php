<?php
require_once('db_model.php');
class UserModel {
	
	private $login;
	private $nome;
	private $objDb;

	public function __construct(){
		$this->objDb = new DB;
	}
	
	public function verificaLoginSenha($login, $senha){

		$objStmt = $this->objDb->prepare('SELECT id FROM tb_usuario WHERE login = :login AND senha = :senha');
		$objStmt->bindValue(':login', $login, PDO::PARAM_STR);
		$objStmt->bindValue(':senha', $senha, PDO::PARAM_STR);
		$objStmt->execute();
		$qtdLinhas = $objStmt->rowCount();
		
		if($qtdLinhas > 0){
			return true;
		}else{
			return false;
		}
	}

	

	public function __destruct(){
		unset($this->objDb);
	}
}
?>

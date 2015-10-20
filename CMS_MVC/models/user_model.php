<?php
require_once('db_model.php');
class UserModel {
	
	private $login;
	private $nome;
	private $objDb;

	public function __construct(){
		$this->objDb = new DB;
	}

	

	public function __destruct(){
		unset($this->objDb);
	}
}
?>

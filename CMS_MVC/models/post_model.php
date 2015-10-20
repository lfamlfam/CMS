<?php
require_once('db_model.php');
abstract class PostModel {

	public $id;
	public $titulo;
	public $conteudo;
	private $objDB;

	public function __construct(){
		$this->objDB = new DB;
	}

	public function getAllPosts(){
		$objStmt = $this->objDB->prepare('SELECT * FROM tb_post');
		$objStmt->execute();
		while($result = $objStmt->fetch()){
			$posts[$result['id']] = $result;
		}
		if(is_array($posts)){
			return $posts;
		}else{
			return array();
		}
	}

	public function __destruct(){
		unset($this->objDB);
	}
}
?>

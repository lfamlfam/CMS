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

	public function getPostList(){
		$objStmt = $this->objDB->prepare('SELECT id, titulo FROM tb_post');
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

	public function getPost($id){
		$objStmt = $this->objDB->prepare('SELECT id, titulo, conteudo FROM tb_post WHERE id = ?');
		$objStmt->execute(array($id));
		$result = $objStmt->fetch();
		
		if(is_array($result)){
			return $result;
		}else{
			return array();
		}
	}

	public function addNewPost($titulo, $conteudo){
		$objStmt = $this->objDB->prepare(	'INSERT INTO 
							tb_post 
							(titulo, conteudo)
							VALUES 
							(?,?)');
		if($objStmt->execute(array($titulo,$conteudo))){
			return true;
		}else{
			return false;
		}
	}

	public function savePost($id, $titulo, $conteudo){
		$objStmt = $this->objDB->prepare(	'UPDATE 
							tb_post 
							SET
							titulo = ?,
							conteudo = ?
							WHERE  
							id = ?');
		if($objStmt->execute(array($titulo,$conteudo,$id))){
			return true;
		}else{
			return false;
		}
	}

	public function removePost($id){
		$objStmt = $this->objDB->prepare(	'DELETE FROM 
							tb_post 
							WHERE   
							id = ?');
		if($objStmt->execute(array($id))){
			return true;
		}else{
			return false;
		}		
	}

	public function __destruct(){
		unset($this->objDB);
	}
}
?>

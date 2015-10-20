<?php
require_once('models/user_model.php');
require_once('views/user_view.php');
class UserController extends UserModel {
	
	private $objUserView;

	public function __construct(){
		parent::__construct();
		$this->objUserView = new UserView;
	}

	public function login($get, $post){
		if(empty($post['login']) && empty($post['senha'])){
			$this->objUserView->showLoginScreen();
		}
	}

	public function __destruct(){
		parent::__destruct();
		unset($this->objUserView);
	}

}
?>

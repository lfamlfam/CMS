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
		}else{
			if($this->verificaLoginSenha($post['login'], $post['senha'])){
				echo "Bem-vindo";
			}else{
				$msg_erro = 'Suas credenciais n&atilde;o conferem';
				$this->objUserView->showLoginScreen($msg_erro);
			}
		}
	}

	public function __destruct(){
		parent::__destruct();
		unset($this->objUserView);
	}

}
?>

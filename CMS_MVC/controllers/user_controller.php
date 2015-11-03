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

		if((empty($post['login']) && empty($post['senha'])) && !isset($_SESSION['login'])){
			$this->objUserView->showLoginScreen();
		}else{

			if(isset($_SESSION['login'])){
				$this->objUserView->showHomeAdmin();
			}elseif($this->verificaLoginSenha($post['login'], $post['senha'])){
				$_SESSION['login'] = $post['login'];
				$this->objUserView->showHomeAdmin();
			}else{
				$msg_erro = 'Suas credenciais n&atilde;o conferem';
				$this->objUserView->showLoginScreen($msg_erro);
			}
		}
	}

	public function logout(){
		session_destroy();
		$this->objUserView->showLoginScreen();
	}

	public function __destruct(){
		parent::__destruct();
		unset($this->objUserView);
	}

}
?>

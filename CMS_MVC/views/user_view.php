<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class UserView {	
	public function showLoginScreen($msg_erro = false){
		include('user/login_screen.php');
	}
}
?>
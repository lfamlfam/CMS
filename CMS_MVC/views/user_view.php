<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class UserView {	
	public function showLoginScreen(){
		include('user/login_screen.php');
	}
}
?>

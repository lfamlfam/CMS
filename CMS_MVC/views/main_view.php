<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class MainView {	

	public function showHeader(){
		include('main/header.php');
	}

	public function showFooter(){
		include('main/footer.php');
	}
}
?>

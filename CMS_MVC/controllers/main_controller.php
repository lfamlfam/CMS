<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class MainController {

	private $controllers_actions = array(	'Main' => array('show' => true),
						'User' => array('login' => true,
								'logout' => true),
						'Post' => array('listAllPosts' => true,
								'addPost' => true,
								'delPost' => true,
								'editPost' => true));	
	private $objController;
	private $controller;
	private $action;
	
	public function __construct($controller, $action){

		session_start();

		if((!$controller && !$action) || !isset($this->controllers_actions[$controller][$action])){
			$this->controller = 'Main';
			$this->action = 'show';	
		}else{
			$this->controller = $controller;
			$this->action = $action;
		}

		if($this->controller == 'Main'){
			require_once('controllers/post_controller.php');
			$objPost = new PostController;
			$allPosts = $objPost->getAllPosts();
			require_once('views/main_view.php');
			$objMainView = new MainView;
			$objMainView->showHeader();
			$objPost->showAllPosts();
			$objMainView->showFooter();
		}else{
			require(strtolower($this->controller).'_controller.php');
			$classe = $this->controller.'Controller';
			$this->objController = new $classe;
			$this->objController->{$this->action}($_GET, $_POST);
		}			
	} 
}
?>

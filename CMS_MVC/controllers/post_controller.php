<?php
require_once('models/post_model.php');
require_once('views/post_view.php');
class PostController extends PostModel {
	
	private $objPostView;

	public function __construct(){
		parent::__construct();
		$this->objPostView = new PostView;
	}

	public function showAllPosts(){
		$posts = $this->getAllPosts();
		$this->objPostView->showAllPosts($posts);
	}

	public function __destruct(){
		parent::__destruct();
		unset($this->objPostView);
	}
}
?>

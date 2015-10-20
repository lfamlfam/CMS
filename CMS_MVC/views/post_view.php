<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class PostView {	
	public function showAllPosts($posts){
		include('post/show_all_posts.php');
	}
}
?>

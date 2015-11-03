<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class PostView {	
	public function showAllPosts($posts){
		include('post/show_all_posts.php');
	}
	public function listAllPosts($posts){
		include('user/home_admin_header.php');
		include('post/list_all_posts.php');
		include('user/home_admin_footer.php');
	}
	public function formAddPost($msg,$post = false){
		include('user/home_admin_header.php');
		include('post/form_add_post.php');
		include('user/home_admin_footer.php');
	}
}
?>

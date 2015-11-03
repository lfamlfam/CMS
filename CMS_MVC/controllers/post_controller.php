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

	public function listAllPosts($get, $post){
		$posts = $this->getPostList();
		$this->objPostView->listAllPosts($posts);
	}

	public function addPost($get, $post){

		$msg = '';

		if(!isset($post['addPost'])){
			$this->objPostView->formAddPost();
		}else{
			if($this->addNewPost($post['titulo'],$post['conteudo'])){
				$msg = 'Post gravado com sucesso';
			}else{
				$msg = 'Erro ao gravar post';
			}
			$this->objPostView->formAddPost($msg);
		}
	}

	public function editPost($get, $post){

		$msg = '';

		if(!isset($get['idPost']) && !isset($post['idPost'])){
			$posts = $this->getPostList();
			$this->objPostView->listAllPosts($posts);
		}elseif(!isset($post['addPost'])){
			$post = $this->getPost($get['idPost']);
			$this->objPostView->formAddPost($msg,$post);			
		}else{
			if($this->savePost($post['idPost'],$post['titulo'],$post['conteudo'])){
				$msg = 'Post atualizado com sucesso';
			}else{
				$msg = 'Erro ao atualizar post';
			}
			$post = $this->getPost($post['idPost']);
			$this->objPostView->formAddPost($msg,$post);
		}
	}


	public function __destruct(){
		parent::__destruct();
		unset($this->objPostView);
	}
}
?>

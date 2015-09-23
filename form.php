<?php
if(!isset($_POST['enviar'])){
	require('form_template.php');
}else{
	if(	$_POST['login'] == 'luiz' &&
		$_POST['senha'] == 'minhasenha'){
		$mensagem = 'Bem-vindo, '.$_POST['login'].'!';
	}else{
		$mensagem = 'Login ou senha incorretos';
	}
	require('form_template_exibe.php');
}
?>

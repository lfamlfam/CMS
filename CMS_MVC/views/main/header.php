<html>
	<head>
		<title>Meu CMS</title>
	</head>
	<body>
		<?php 
		if(isset($_SESSION['login'])){
			echo '<p align="right"><a href="adm/">Admin</a></p>';
		}
		?>
		<br><br>
		Bem-vindo(a) ao meu CMS
		<br><br>
		<hr>
		<br><br>


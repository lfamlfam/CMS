<html>
	<head>
		<title>ADM do Meu CMS</title>
	</head>
	<body>
		<br><br>
		<?php
		if(isset($msg_erro)){
			echo "<center><font color='red'>$msg_erro</font></center>";
		}
		?>
		<br><br>
		<center>
			<form method='post' action='index.php?controller=User&action=login'>
				<table>
					<tr>
						<td>Login </td><td><input type='text' name='login'></td>
					</tr>
					<tr>
						<td>Senha </td><td><input type='password' name='senha'></td>
					</tr>
					<tr>
						<td>Login </td><td><input type='submit' value='Entrar'></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>

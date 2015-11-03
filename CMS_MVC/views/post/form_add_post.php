<?php
if(!empty($msg)){
	echo "<center><b>$msg</b></center>";
}
?>
<form method='post' action='index.php?controller=Post&action=<?php if(isset($post['id'])){ echo 'editPost'; } else { echo 'addPost'; } ?>'>
	<table align='center' width='80%'> 
		<tr>
			<td>T&iacute;tulo</td>
		</tr>
		<tr>
			<td><input type='text' size='100%' name='titulo' value='<?php if(isset($post['titulo'])){ echo $post['titulo']; } ?>'></td>
		</tr>
		<tr>
			<td>Conte&uacute;do</td>
		</tr>
		<tr>
			<td><textarea name='conteudo' rows="10" cols="50" ><?php if(isset($post['conteudo'])){ echo $post['conteudo']; } ?></textarea></td>
		</tr>
		<tr>
			<td><input type='hidden' name='idPost' value='<?php if(isset($post['id'])){ echo $post['id']; } ?>'></td>
		</tr>
		<tr>
			<td align='right'><input type='submit' name='addPost' value='Gravar Post'></td>
		</tr>
		</tbody>
	</table>
</form>

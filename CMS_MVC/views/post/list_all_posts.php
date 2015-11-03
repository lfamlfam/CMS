<table align='center' width='80%'> 
	<thead>	
		<th>ID</th>
		<th>T&iacute;tulo</th>
		<th>Apagar</th>
		<th>Editar</th>
		<th><a href='index.php?controller=Post&action=addPost'>+ Novo Post</a></th>
	</thead>
	<tbody>
	<?php
	foreach($posts as $id => $post){
		echo "	<tr>
				<td align='center'>$id</td>
				<td align='center'>{$post['titulo']}</td>
				<td align='center'><a href='index.php?controller=Post&action=delPost&idPost=$id' style='color: red;'>X</a></td>
				<td align='center'><a href='index.php?controller=Post&action=editPost&idPost=$id' style='color: gray;'>E</a></td>
				<td align='center'>&nbsp;</td>
			</tr>\n";
	}
	?>
	</tbody>
</table>

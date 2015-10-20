<table>
<?php
foreach($posts as $id => $post){
	echo "	\n<thead>
			<th align='left'>{$post['titulo']}</th>
		</thead>
		<tbody>
			<td>{$post['conteudo']}</td>
		</tbody>\n";
}
?>
</table>

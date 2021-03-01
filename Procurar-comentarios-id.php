<?php

include "cabecalho-menu.php";
include "conecta.php";

$id = $_POST['id'];
$post = PostComentarioId($id);

?>

<table class="table table-striped table-bordered">


<?php
		
		foreach ($post as $posts)
		{
		?>
			<tr>
				<td><?=$posts->id?></td>
				<td><?=$posts->name?></td>
				<td><?=$posts->email?></td>
				<td><?=$posts->body?></td>
			</tr>
		<?php
		}
		?>	

	</table>
				
<?php
include "rodape-menu.php";
?>
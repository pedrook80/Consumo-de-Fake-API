<?php

include "cabecalho-menu.php";
include "conecta.php";


$post = Post();

?>

<table class="table table-striped table-bordered">


<?php
		
		foreach ($post as $posts)
		{
		?>
			<tr>
				<td><?=$posts->id?></td>
				<td><?=$posts->title?></td>
				<td><?=$posts->body?></td>
				
			</tr>
		<?php
		}
		?>	

	</table>
				
<?php
include "rodape-menu.php";
?>
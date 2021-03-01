<?php

include "cabecalho-menu.php";
include "conecta.php";

$id = $_POST['id'];
$post = PostId($id);

?>

    <table class="table table-striped table-bordered">  
			<tr>
				<td><?=$post->id?></td>
				<td><?=$post->title?></td>			
			</tr>
	</table>
				
<?php
include "rodape-menu.php";
?>
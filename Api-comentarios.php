<?php
include 'cabecalho-menu.php';


?>

<h1>Procurar Comentarios</h1>
<form action="" method="post" name="formid">
    <table class="table">
        <tr>
            <td>Numero</td>
            <td><input class="form-control" type="text" name="id" id="id" /></td>
        </tr>
		<tr>
            <td><button class="btn btn-primary" type="button" onclick="validaForm('Procurar-comentarios-id.php')">Procurar</button></td>
        </tr>
    </table>
</form>

<div id="msg-erro"><p class="text-danger"></p></div>

<?php
include 'rodape-menu.php';
?>

<script src="js/js.js"></script> 

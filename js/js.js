function validaForm(destino)
{
	msg = "* Preencha os campos obrigatórios.";
	vazio = 0;
	
	document.getElementById('msg-erro').innerHTML = '';
	
	id = document.getElementById('id').value;
	
	if (id == '') vazio++;
	
	if (vazio > 0)
	{
		document.getElementById('msg-erro').innerHTML = msg;
		return false;
	}
	
	document.formid.action = destino;
	document.formid.submit();
}
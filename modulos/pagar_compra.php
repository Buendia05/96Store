<?php
check_user('pagar_compra');

if(isset($subir)){
	$nombre = clear($nombre);

	$comprobante = "";

	if(is_uploaded_file($_FILES['comprobante']['tmp_name'])){
		$comprobante = date("His").rand(0,1000).".png";
		move_uploaded_file($_FILES['comprobante']['tmp_name'], "recursos/comprobantes/".$comprobante);
	}

	$mysqli->query("INSERT INTO pagos (id_clientes,id_compra,comprobante,nombre,fecha) VALUES ('".$_SESSION['id_clientes']."','$id','$comprobante','$nombre',NOW())");

	alert("Comprobante enviado");
	redir("?p=miscompras");

}
?>
<div class="container-fluid" >
	<div class="row" style="font-family: 'Orbitron','Arial'; color: black;">
		<div class="col-md-12">
<h1>Metodos de pago</h1>
<br>
<table class="table table-striped">
<tr>
	<th>Tipo de pago</th>
	<th>Numero de Cuenta</th>
	<th>Nombre de Cuenta</th>
	<th>Acciones</th>
</tr>

<tr>
	<td>Transferencia Bancaria</td>
	<td>0000-0000-0000-0000</td>
	<td>Fulanito</td>
	<th><a target="_blank" href="https://mail.google.com/mail/u/0/#inbox"> Ir al pago </a></th>
</tr>
</table>

<h1>Envia el comprobante de pago de la compra</h1>
<br>
<form method="post" action="" enctype="multipart/form-data">
	<div class="form-group">
		<input type="file" class="form-control" name="comprobante" title="Adjuntar Comprobante" required/>
		<label><small>Adjuntar comprobante</small></label>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="nombre" title="Nombre de la persona que transfiere"/>
	</div>
	<div class="form-group">
		<input type="submit" name="subir" class="btn btn-primary" value="Enviar"/>
	</div>
</form>
</div>
</div>
<div>

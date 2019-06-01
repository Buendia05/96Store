<?php
check_admin();

if(isset($aceptar)){
	$mysqli->query("UPDATE pagos SET estado = 1 WHERE id_pagos = '$aceptar'");
	$id_compra = clear($id_compra);
	$mysqli->query("UPDATE compra SET estado = 1 WHERE id_compra = '$id_compra'");
	alert("Pago verificado.");
	redir("?p=ver_compra&id=".$id_compra);
}

//Estados:
//0 Sin verificar
//1 Verificado
//2 Reembolso

?>
<div class="container-fluid" style="font-family: 'Orbitron','Arial'; color: black;">
<div class="row">
<h1>Pagos Pendientes</h1>
<hr>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
		<th>Cliente</th>
		<th>Fecha</th>
		<th>Comprobante</th>
		<th>Nombre de comprobante</th>
		<th>Estado</th>
		<th>Acciones</th>
	</tr>

	<?php
	$s = $mysqli->query("SELECT * FROM pagos WHERE estado = 0 ORDER BY fecha DESC");
	while($r=mysqli_fetch_array($s)){
		?>
		<tr>
			<td><?=nombre_cliente($r['id_clientes'])?></td>
			<td><?=fecha($r['fecha'])?></td>
			<td><a style="color:#333" target="_blank" href="recursos/comprobantes/<?=$r['comprobante']?>">Ver Comprobante <i class="fa fa-eye"></i></a></td>
			<td><?=$r['nombre']?></td>
			<td><?=estado_pago($r['estado'])?></td>
			<td>
				<?php
				if($r['estado']==0){
					?>
						<a style="color:#333" href="?p=pagos&aceptar=<?=$r['id_pagos']?>&id_compra=<?=$r['id_compra']?>" title="Verificar y aceptar pago"><i class="fa fa-check"></i></a>
					<?php
				}
				?>
				<a style="color:#333" href="?p=ver_compra&id=<?=$r['id_compra']?>"><i class="fa fa-eye" title="Ver Compra"></i></a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
</div>
</div>

<div class="row">
	<br>

<h1>Pagos de los clientes</h1>
<hr>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
		<th>Cliente</th>
		<th>Fecha</th>
		<th>Comprobante</th>
		<th>Nombre de comprobante</th>
		<th>Estado</th>
		<th>Acciones</th>
	</tr>

	<?php
	$s = $mysqli->query("SELECT * FROM pagos ORDER BY fecha DESC");
	while($r=mysqli_fetch_array($s)){
		?>
		<tr>
			<td><?=nombre_cliente($r['id_clientes'])?></td>
			<td><?=fecha($r['fecha'])?></td>
			<td><a style="color:#333" target="_blank" href="recursos/comprobantes/<?=$r['comprobante']?>">Ver Comprobante <i class="fa fa-eye"></i></a></td>
			<td><?=$r['nombre']?></td>
			<td><?=estado_pago($r['estado'])?></td>
			<td>
				<?php
				if($r['estado']==0){
					?>
						<a style="color:#333" href="?p=pagos&aceptar=<?=$r['id_pagos']?>" title="Verificar y aceptar pago"><i class="fa fa-check"></i></a>
					<?php
				}
				?>
				<a style="color:#333" href="?p=ver_compra&id=<?=$r['id_compra']?>"><i class="fa fa-eye" title="Ver Compra"></i></a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
</div>
</div>
</div>

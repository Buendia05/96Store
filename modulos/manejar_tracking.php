<?php
check_admin();

// 0 recien comprada
// 1 preparando compra
// 2 en camino
// 3 despachado

$s = $mysqli->query("SELECT * FROM compra WHERE estado != 3");

if(isset($eliminar)){
	$eliminar = clear($eliminar);

	$mysqli->query("DELETE FROM productos_compra WHERE id_compra = '$eliminar'");

	$mysqli->query("DELETE FROM compra WHERE id_compra = '$eliminar'");
	redir("?p=manejar_tracking");

}


?>

<h1 style="font-family: 'Orbitron','Arial'; color:#fff;">Trackings <span class="icon-road"></span> </h1>
<br>
<br>
<div class="table-responsive">
<table class="table table-stripe" style="background-color: lightgray; font-family: 'Orbitron','Arial';">
	<tr>
		<th>Cliente</th>
		<th>Fecha</th>
		<th>Monto</th>
		<th>Status</th>
		<th>Acciones</th>
	</tr>
<?php
	while($r=mysqli_fetch_array($s)){

		$sc = $mysqli->query("SELECT * FROM clientes WHERE id_clientes = '".$r['id_clientes']."'");
		$rc = mysqli_fetch_array($sc);
		$cliente = $rc['name'];


		if($r['estado'] == 0){
			$status = "Iniciando";
		}elseif($r['estado']==1){
			$status = "Preparando";
		}elseif($r['estado'] == 2){
			$status = "Despachando";
		}elseif($r['estado'] == 3){
			$status = "Finalizado";
		}else{
			$status = "Indefinido";
		}

		$fecha = fecha($r['fecha']);


		?>
		<tr>
			<td><?=$cliente?></td>
			<td><?=$fecha?></td>
			<td><?=$r['monto']?> <?=$divisa?></td>
			<td><?=$status?></td>
			<td>
				<a href="?p=manejar_tracking&eliminar=<?=$r['id_compra']?>">
					<i class="fa fa-times"></i>
				</a>
				&nbsp; &nbsp;
				<a href="?p=manejar_status&id=<?=$r['id_compra']?>">
					<i class="fa fa-edit"></i>
				</a>
				&nbsp; &nbsp;
				<a href="?p=ver_compra&id=<?=$r['id_compra']?>">
					<i class="fa fa-eye"></i>
				</a>
			</td>
		</tr>
		<?php
	}
?>
</table>
</div>

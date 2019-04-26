<?php
check_user('miscompras');
$s = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '".$_SESSION['id']."' ORDER BY fecha DESC");
if(mysqli_num_rows($s)>0){
	?>
	<h1 style="font-family: 'Orbitron','Arial'; color:#fff;">Mis compras <span class="icon-shopcart"></span> </h1>

	<table class="table table-stripe">
		<tr>
			<th>Fecha</th>
			<th>Monto</th>
			<td>Estado</td>
			<td>Acciones</td>
		</tr>

	<?php
	while($r=mysqli_fetch_array($s)){
		?>
		<tr>
			<td><?=fecha($r['fecha'])?></td>
			<td><?=number_format($r['monto'])?> <?=$divisa?></td>
			<td><?=estado($r['estado'])?></td>
			<td>
				<a href="?p=ver_compra&id=<?=$r['id']?>">
					<i class="fa fa-eye"></i>
				</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>

	<?php
}else{
	?>
	<i>Usted aun no ha comprado</i>
	<?php
}

<?php
check_user('miscompras');
$s = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '".$_SESSION['id_cliente']."' ORDER BY fecha DESC");
if(mysqli_num_rows($s)>0){
	?>

<h1 style="font-family: 'Orbitron','Arial'; color:#fff;">Mis compras <span class="icon-shopcart"></span> </h1>
<br>
<div class="table-responsive">
	<table class="table table-stripe" style="font-family: 'Orbitron', 'Arial'; color:#fff; background-color: gray; ">
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
					<i class="fa fa-eye" style="color:#fff;"></i>
				</a>
				<?php
					if (estado($r['estado']) == "Iniciando") {
						?>
						&nbsp;&nbsp; <a title="Pagar" href="?=pagar_compra&id=<?=$r['id']?>"><b style="color:#fff;">P</b></a>
						<?php
					}
				?>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
</div>
	<?php
}else{
	?>
	<i style="font-family: 'Orbitron','Arial'; color:#fff;">Lo sentimos, Usted aun no ha comprado</i>
	<?php
}

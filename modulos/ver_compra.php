<?php
check_user('ver_compra');
$id = clear($id_compra);

$s = $mysqli->query("SELECT * FROM compra WHERE id_compra = '$id' AND id_clientes = '".$_SESSION['id_clientes']."'");

if(mysqli_num_rows($s)>0){

$s = $mysqli->query("SELECT * FROM compra WHERE id_compra = '$id'");
$r = mysqli_fetch_array($s);

$sc = $mysqli->query("SELECT * FROM clientes WHERE id_clientes = '".$r['id_clientes']."'");
$rc = mysqli_fetch_array($sc);

$nombre = $rc['name'];

?>
<div class="container-fluid">
	<div class="row" style="font-family: 'Orbitron','Arial'; color: black;">
		<div class="col-md-12">
<h1>Compra #<span style="color:#08f"><?=$r['id_compra']?></span></h1><br>

Fecha: <?=fecha($r['fecha'])?><br>
Monto: <?=number_format($r['monto'])?> <?=$divisa?><br>
Estado: <?=estado($r['estado'])?><br>
<br>
<table class="table table-striped">
	<tr>
		<th>Nombre del producto</th>
		<th>Cantidad</th>
		<th>Monto</th>
		<th>Monto Total</th>
		<th>Acciones</th>
	</tr>
	<?php
		$sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_productos = '$id'");
		while($rp=mysqli_fetch_array($sp)){

			$spro = $mysqli->query("SELECT * FROM productos WHERE id_productos = '".$rp['id_productos']."'");
			$rpro = mysqli_fetch_array($spro);

			$nombre_producto = $rpro['name'];

			$montototal = $rp['monto'] * $rp['cantidad'];
			?>
				<tr>
					<td><?=$nombre_producto?></td>
					<td><?=$rp['cantidad']?></td>
					<td><?=$rp['monto']?></td>
					<td><?=$montototal?></td>
					<td>
						<?php
						if($rpro['descargable']!=""){
							?>
							<a href="recursos/descargable/<?=$rpro['descargable']?>" download><i class="fa fa-download"></i></a>
							<?php
						}else{
							echo "--";
						}
						?>
					</td>
				</tr>
			<?php
		}
	?>
</table>
<br>
<br>
<?php
if(estado($r['estado']) == "Iniciando"){
	?>
	<a class="btn btn-primary" href="?p=pagar_compra&id=<?=$r['id_compra']?>">
		Pagar
	</a>
</div>
</div>
</div>
	<?php
}
?>

<?php

}else{
	alert("Ha ocurrido un error");
	redir("?p=miscompras");
}

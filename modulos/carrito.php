<?php

check_user('carrito');

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM carro WHERE id_carro = '$eliminar'");
	redir("?p=carrito");
}

if(isset($id) && isset($modificar)){

	$id = clear($id);
	$modificar = clear($modificar);

	$mysqli->query("UPDATE carro SET cant = '$modificar' WHERE id_carro = '$id'");
	alert("Cantidad modificada",1,'carrito');
	//redir("?p=carrito");
}

if(isset($finalizar)){

	$monto = clear($monto_total);

	$id_clientes = clear($_SESSION['id_clientes']);
	$q = $mysqli->query("INSERT INTO compra (id_clientes,fecha,monto,estado) VALUES ('$id_clientes',NOW(),'$monto',0)");

	$sc = $mysqli->query("SELECT * FROM compra WHERE id_clientes = '$id_clientes' ORDER BY id_compra DESC LIMIT 1");
	$rc = mysqli_fetch_array($sc);

	$ultima_compra = $rc['id_compra'];


	$q2 = $mysqli->query("SELECT * FROM carro WHERE id_clientes = '$id_clientes'");
	while($r2=mysqli_fetch_array($q2)){

		$sp = $mysqli->query("SELECT * FROM productos WHERE id_productos = '".$r2['id_productos']."'");
		$rp = mysqli_fetch_array($sp);

		$monto = $rp['price'];

		$mysqli->query("INSERT INTO productos_compra (id_compra,id_productos,cantidad,monto) VALUES ('$ultima_compra','".$r2['id_productos']."','".$r2['cant']."','$monto')");

	}



	$id_compra = $rc['id_compra'];

	alert("Se ha finalizado la compra",1,'ver_compra&id_compra='.$id_compra);
	//redir("?p=ver_compra&id=".$id_compra);;

}
?>

<h1 style="font-family: 'Orbitron','Arial'; color: #fff;"><i class="fa fa-shopping-cart"></i> Carro de Compras</h1>
<br><br>
<div class="table-responsive">
<table class="table table-striped" style="font-family: 'Orbitron','Arial'; background-color: gray;">
	<tr>
		<th><i class="fa fa-image"></i></th>
		<th>Nombre del producto</th>
		<th>Cantidad</th>
		<th>Precio por unidad</th>
		<th>Oferta</th>
		<th>Precio Total</th>
		<th>Precio Neto</th>
		<th>Action</th>
	</tr>
<?php
$id_clientes = clear($_SESSION['id_clientes']);
$q = $mysqli->query("SELECT * FROM carro WHERE id_clientes = '$id_clientes'");
$monto_total = 0;
while($r = mysqli_fetch_array($q)){
	$q2 = $mysqli->query("SELECT * FROM productos WHERE id_productos = '".$r['id_productos']."'");
	$r2 = mysqli_fetch_array($q2);

	$preciototal = 0;
			if($r2['oferta']>0){
				if(strlen($r2['oferta'])==1){
					$desc = "0.0".$r2['oferta'];
				}else{
					$desc = "0.".$r2['oferta'];
				}

				$preciototal = $r2['price'] -($r2['price'] * $desc);
			}else{
				$preciototal = $r2['price'];
			}

	$nombre_producto = $r2['name'];

	$cantidad = $r['cant'];

	$precio_unidad = $r2['price'];
	$precio_total = $cantidad * $preciototal;
	$imagen_producto = $r2['imagen'];

	$monto_total = $monto_total + $precio_total;



	?>
		<tr>
			<td><img src="recursos/productos/<?=$imagen_producto?>" class="imagen_carro"/></td>
			<td><?=$nombre_producto?></td>
			<td><?=$cantidad?></td>
			<td><?=$precio_unidad?> <?=$divisa?></td>
			<td>
				<?php
					if($r2['oferta']>0){
						echo $r2['oferta']."% de Descuento";
					}else{
						echo "Sin descuento";
					}
				?>
			</td>
			<td><?=$preciototal?> <?=$divisa?></td>
			<td><?=$precio_total?> <?=$divisa?></td>
			<td>
				<a onclick="modificar('<?=$r['id_carro']?>')" href="#"><i class="fa fa-edit" title="Modificar cantidad en carrito"></i></a>
				<a href="?p=carrito&eliminar=<?=$r['id_carro']?>"><i class="fa fa-times" title="Eliminar"></i></a>
			</td>
		</tr>
	<?php
}
?>
</table>
</div>
<br>
<h2 style="font-family: 'Orbitron','Arial';">Monto Total: <b class="text-green" style="font-family: 'Orbitron','Arial';"><?=$monto_total?> <?=$divisa?></b></h2>

<br><br>
<form method="post" action="" style="font-family: 'Orbitron','Arial';">
	<input type="hidden" name="monto_total" value="<?=$monto_total?>"/>
	<button class="btn btn-primary" type="submit" name="finalizar"><i class="fa fa-check"></i> Finalizar Compra</button>
</form>

<script type="text/javascript">

	function modificar(idc){
		var new_cant = prompt("¿Cual es la nueva cantidad?");

		if(new_cant>0){

			window.location="?p=carrito&id="+idc+"&modificar="+new_cant;

		}

	}

</script>

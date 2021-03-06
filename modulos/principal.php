
<style>
@media print *{
	*{
		font-family: arial;
	}
	body{
		padding:0;
		margin:0;
	}
	a{
		text-decoration: none;
		color:#fff;
	}
	.header{
		background:#111;
		color:#fff;
		padding:30px;
		text-align: center;
		font-size:30px;
		font-weight: bold;
		text-transform: uppercase;
	}
	.menu{
		padding:10px;
		background: #111;
	}
	.menu a{
		text-decoration: none;
		color:#fff;
		background:#111;
		padding:10px;
	}
	.menu a:hover{
		background: #000;
	}
	.cuerpo{
		background: #eaeaea;
		padding:30px;
		min-height:440px;
	}
	.footer{
		background:#000;
		color:#aaa;
		text-align:center;
		font-size:10px;
		padding:50px;
	}
	.centrar_login{
		width:40%;
		text-align: center;
		padding-top:100px;
	}
	.producto{
		display:inline-block;
		width:25%;
		padding:10px;
		background: rgba(0,0,0,0.05);
		color:#333;
		margin:5px;
	}
	.img_producto{
		text-align: center;
		width:320px;
		height:322px;
	}
	.name_producto{
		padding:10px;
		color:#fff;
		background:#ff8800;
		text-align: center;
		font-size:18px;
		font-weight: bold;
	}
	.precio{
		color:#00aa00;
		padding:20px;
	}
	.subir{
		position: relative;
		bottom: 10px;
	}
	.imagen_carro{
		width:50px;
		height:50px;
		border-radius: 1000px;
	}
	.text-green{
		color:#0a0;
	}
}
</style>
<?php
if(isset($agregar) && isset($cant)){
  if (isset($_SESSION['id_clientes'])) {
    redir("?p=login");
  }
	$idp = clear($agregar);
	$cant = clear($cant);
	$id_clientes = clear($_SESSION['id_clientes']);
	$v = $mysqli->query("SELECT * FROM carro WHERE id_clientes = '$id_clientes' AND id_productos = '$idp'");
	if(mysqli_num_rows($v)>0){
		$q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_clientes = '$id_clientes' AND id_productos = '$idp'");

	}else{
		$q = $mysqli->query("INSERT INTO carro (id_clientes,id_productos,cant) VALUES ($id_clientes,$idp,$cant)");
	}
	alert("Se ha agregado al carro de compras",1,'principal');
	//redir("?p=principal");
}
?>

<div class="container-fluid">
	<center>
<h1 style="font-family: 'Orbitron','Arial'; color:#fff; font-size: 2.5vw;">Ultimos 3 Productos Agregados</h1><br><br>
<?php
$q = $mysqli->query("SELECT * FROM productos WHERE oferta = 0 ORDER BY id_productos DESC LIMIT 3");
while($r=mysqli_fetch_array($q)){
	$preciototal = 0;
			if($r['oferta']>0){
				if(strlen($r['oferta'])==1){
					$desc = "0.0".$r['oferta'];
				}else{
					$desc = "0.".$r['oferta'];
				}
				$preciototal = $r['price'] -($r['price'] * $desc);
			}else{
				$preciototal = $r['price'];
			}
	?>
		<div class="producto" style="font-family: 'Orbitron','Arial'; color:#fff; ">
			<div class="name_producto" style="font-size: 2vw;"><?=$r['name']?></div>
			<div><img class="img_producto" style="width: 100%; height:100%;" src="recursos/productos/<?=$r['imagen']?>"/></div>
			<?php
			if($r['oferta']>0){
				?>
				<del><?=$r['price']?> <?=$divisa?></del> <span class="precio"> <?=$preciototal?> <?=$divisa?> </span>
				<?php
			}else{
				?>
				<span class="precio"><br><?=$r['price']?> <?=$divisa?></span>
				<?php
			}
			?>
	</div>
	<?php
}
?>
<h1 style="font-family: 'Orbitron','Arial'; color:#fff; font-size: 2.5vw;">Ultimas 3 Ofertas Agregadas</h1><br><br>
<?php
	$q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY id_productos DESC LIMIT 3");
	while($r=mysqli_fetch_array($q)){
	$preciototal = 0;
			if($r['oferta']>0){
				if(strlen($r['oferta'])==1){
					$desc = "0.0".$r['oferta'];
				}else{
					$desc = "0.".$r['oferta'];
				}
				$preciototal = $r['price'] -($r['price'] * $desc);
			}else{
				$preciototal = $r['price'];
			}
	?>
		<div class="producto" style="font-family: 'Orbitron','Arial'; color:#fff;">
			<div class="name_producto" style="font-size: 2vw;"><?=$r['name']?></div>
			<div><img class="img_producto" style="width: 100%; height:100%;" src="recursos/productos/<?=$r['imagen']?>"/></div><br>
			<del><?=$r['price']?> <?=$divisa?></del> <span class="precio"> <?=$preciototal?> <?=$divisa?> </span>
		</div>
	</center>
</div>
	<?php
}
?>




<script type="text/javascript">

	function agregar_carro(idp){
		cant = $("#cant"+idp).val();
		if(cant.length>0){
			window.location="?p=principal&agregar="+idp+"&cant="+cant;
		}
	}
</script>

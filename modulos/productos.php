<?php
check_user("productos");



if(isset($cat)){
	$sc = $mysqli->query("SELECT * FROM categorias WHERE id_categoria = '$cat'");
	$rc = mysqli_fetch_array($sc);
	?>

<br>
	<?php
}

if(isset($agregar) && isset($cant)){

	$idp = clear($agregar);
	$cant = clear($cant);
	$id_clientes = clear($_SESSION['id_clientes']);

	$v = $mysqli->query("SELECT * FROM carro WHERE id_clientes = '$id_clientes' AND id_productos = '$idp'");

	if(mysqli_num_rows($v)>0){

		$q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_clientes = '$id_clientes' AND id_productos = '$idp'");

	}else{

		$q = $mysqli->query("INSERT INTO carro (id_clientes,id_productos,cant) VALUES ($id_clientes,$idp,$cant)");

	}

	alert("Se ha agregado al carro de compras");
	redir("?p=productos");
}

if(isset($busq) && isset($cat)){
	$q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){
	$q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id_productos DESC");
}elseif(isset($busq) && !isset($cat)){
	$q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%'");
}elseif(!isset($busq) && !isset($cat)){
	$q = $mysqli->query("SELECT * FROM productos ORDER BY id_productos DESC");
}else{
	$q = $mysqli->query("SELECT * FROM productos ORDER BY id_productos DESC");
}
?>

	<form method="post" action="" style="font-family: 'Orbitron','Arial'; color:#fff;">
		<h1 style="font-family: 'Orbitron','Arial'; color:#fff;">Busqueda de Juegos <span class="icon-search"></span> </h1>
		<br>
		<small style="font-family: 'Orbitron','Arial'; color:#fff;">Categoria Filtrada por: <?=$rc['categoria']?></small>
<br>
<br>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="form-group">
					<input type="text" class="form-control" name="busq" placeholder="Coloca el nombre del producto"/>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<select id="categoria" name="cat" class="form-control">
					<?php
					$cats = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
					while($rcat = mysqli_fetch_array($cats)){
						?>
						<option value="<?=$rcat['id_categoria']?>"><?=$rcat['categoria']?></option>
						<?php
					}
					?>
				</select>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<button type="submit" class="btn btn-primary" name="buscar"><i class="fa fa-serch"></i> Buscar</button>
			</div>
		</div>
	</form>
<?php
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
			<center>
			<div class="name_producto" style="font-size: 1.5vw;"><?=$r['name']?></div>
			<div><img style="width: 100%; height:100%;"class="img_producto" src="recursos/productos/<?=$r['imagen']?>"/></div>
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

			<button class="btn btn-warning pull-right" onclick="agregar_carro('<?=$r['id_productos']?>');"><i class="fa fa-shopping-cart"></i></button>
			</center>
		</div>

	<?php
}
?>

<script type="text/javascript">

	function agregar_carro(idp){
		var cant = prompt("¿Que cantidad desea agregar?",1);

		if(cant.length>0){
			window.location="?p=productos&agregar="+idp+"&cant="+cant;
		}
	}

</script>

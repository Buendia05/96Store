<select id="categoria" onchange="redir_cat()" class="form-control">
	<option value="">Seleccione una categoria para filtrar</option>
	<?php
	$cats = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
	while($rcat = mysqli_fetch_array($cats)){
		?>
		<option value="<?=$rcat['id_categoria']?>"><?=$rcat['categoria']?></option>
		<?php
	}
	?>
</select>


<?php
check_user("productos");

if(isset($cat)){
	$sc = $mysqli->query("SELECT * FROM categorias WHERE id_categoria = '$cat'");
	$rc = mysqli_fetch_array($sc);
	?>
	<h1>Categoria Filtrada por: <?=$rc['categoria']?></h1>
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

if(isset($cat)){
	$q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' AND oferta>0 ORDER BY id_productos DESC");
}else{
	$q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY id_productos DESC");
}
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
		<div class="producto">
			<div class="name_producto"><?=$r['name']?></div>
			<div><img class="img_producto" src="../recursos/productos/<?=$r['imagen']?>"/></div><br>
			<del><?=$r['price']?> <?=$divisa?></del> <span class="precio"> <?=$preciototal?> <?=$divisa?> </span>
			<button class="btn btn-warning pull-right" onclick="agregar_carro('<?=$r['id']?>');"><i class="fa fa-shopping-cart"></i></button>
		</div>
	<?php
}
?>

<script type="text/javascript">

	function agregar_carro(idp){
		var cant = prompt("¿Que cantidad desea agregar?",1);

		if(cant.length>0){
			window.location="?p=ofertas&agregar="+idp+"&cant="+cant;
		}
	}

	function redir_cat(){

		window.location="?p=ofertas&cat="+$("#categoria").val();

	}

</script>

<?php
check_admin();

if(isset($enviar)){
	$categoria = clear($categoria);

	$s = $mysqli->query("SELECT * FROM categorias WHERE categoria = '$categoria'");

	if(mysqli_num_rows($s)>0){
		alert("Ya esta categoria esta agregada a la base de datos");
		redir("");
	}else{
		$mysqli->query("INSERT INTO categorias (categoria) VALUES ('$categoria')");
		alert("Categoria Agregada");
		redir("");
	}

}

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM categorias WHERE id_categoria = '$eliminar'");
	alert("Categoria eliminada");
	redir("?p=agregar_categoria");
}

?>

<h1 style="font-family: 'Orbitron','Arial'; color: #fff;">Agregar Categoria <span class="icon-spinner4"></span> </h1>
<br><br>
<form method="post" action="" style="font-family: 'Orbitron','Arial'; color: #fff;">
	<div class="form-group">
		<input type="text" class="form-control" name="categoria" placeholder="Categoria"/>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="enviar" value="Agregar categoria"/>
	</div>
</form><br>

<br>

<table class="table table-striped" style="font-family: 'Orbitron','Arial'; background-color: lightgray;">
	<tr>
		<th>Id</th>
		<th>Categoria</th>
		<th>Acciones</th>
	</tr>

	<?php
	$q = $mysqli->query("SELECT * FROM categorias ORDER BY id_categoria ASC");
	while($r=mysqli_fetch_array($q)){
		?>
			<tr>
				<td><?=$r['id_categoria']?></td>
				<td><?=$r['categoria']?>
				<td>
					<a href="?p=agregar_categoria&eliminar=<?=$r['id_categoria']?>"><i class="fa fa-times"></i></a>
				</td>
			</tr>
		<?php
	}
	?>
</table>

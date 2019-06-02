<?php

if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);

	$q = $mysqli->query("SELECT * FROM admins WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($q)>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id_admins'] = $r['id_admins'];
		echo "
			<script>
				Swal.fire(
				'Good job!',
				'You clicked the button!',
				'success'

			);

			</script>
		";
		redir("?p=admin");
	}else{
		alert("Los datos no son validos");
		redir("?p=admin");
	}


}

if(isset($_SESSION['id_admins'])){ // si hay una sesion iniciada
	?>
	<div class="container-fluid" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<h1>Administracion</h1>
		<br>
		<div class="row">
		<div class="col-xs-12 col-lg-3" style="float: center;">
			<a href="?p=frm_admin" style="font-family: 'Orbitron','Arial'; color: #fff;">
			<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Crear Administrador</button></a>
		</div>

		<div class="col-xs-12 col-lg-3" style="float: left;">
			<a  href="?p=agregar_producto" style=" font-family: 'Orbitron','Arial'; color: #fff;">
			<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Agregar Productos</button></a>
		</div>

		<div class="col-xs-12 col-lg-3" style="float: center;">
			<a href="?p=agregar_categoria" style="font-family: 'Orbitron','Arial'; color: #fff;">
			<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Agregar Categoria</button></a>
		</div>

		<div class="col-xs-12 col-lg-3" style="float: center;">
			<a href="?p=manejar_tracking" style="font-family: 'Orbitron','Arial'; color: #fff;">
			<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Ver Estado</button></a>
		</div>

</div>
<br>
<div class="row">
	<div class="col-xs-12 col-lg-3" style="float: center;">
		<a href="?p=pagos" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Ver Pagos</button></a>
	</div>
</div>

<hr>
<h1>Reportes</h1>
<br>
<div class="row">
	<div class="col-xs-12 col-lg-3" style="float: center;">
		<a href="recursos/reportesPDF/reporteProductos.php" target="_blank" class="btn btn-warning" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<i class="fa fa-plus-circle"></i> Reporte de Productos</a>
	</div>

	<div class="col-xs-12 col-lg-3" style="float: center;">
		<a href="recursos/reportesPDF/reporteVentas.php" target="_blank" class="btn btn-warning" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<i class="fa fa-plus-circle"></i> Reporte de Ventas</a>
	</div>

	<div class="col-xs-12 col-lg-3" style="float: center;">
		<a href="recursos/reportesPDF/reporteClientes.php" target="_blank" class="btn btn-warning" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<i class="fa fa-plus-circle"></i> Reporte de Clientes</a>
	</div>
</div>
</div>
	<?php
}else{ // si no hay una sesion iniciada
	?>
	<center>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<img src="recursos/multimedia/img/logo1.png" alt="" style="width:200px; height:200px;">
		</div>
		<form method="post" action="" style="font-family: 'Orbitron','Arial'; color: #fff;">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i> Iniciar Sesión Como Administrador</h2></label><br><br>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
					<br>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in"></i> Ingresar</button>
				</div>
			</div>
		</form>
	</center>
	<?php
}
?>

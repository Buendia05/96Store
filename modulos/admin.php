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
	<a href="?p=agregar_producto" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar Productos</button></a>

		<a href="?p=agregar_categoria" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<button class="btn btn-info"><i class="fa fa-plus-circle"></i> Agregar Categoria</button></a>

		<a href="?p=manejar_tracking" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Manejar Tracking</button></a>

		<a href="?p=pagos" style="font-family: 'Orbitron','Arial'; color: #fff;">
		<button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Manejar Pagos</button></a>
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
					<h4><a href="?p=frm_admin">Registrate</a></h4>
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

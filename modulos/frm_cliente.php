<?php
if(isset($_SESSION['id_clientes'])){
	redir("./");
}

if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);
	$cpassword = clear($cpassword);
	$nombre = clear($nombre);
	$q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username'");
	if(mysqli_num_rows($q)>0){
		alert("El usuario ya está en uso",0,'frm_cliente');
		die();
	}
	if($password != $cpassword){
		alert("Las contraseñas no coinciden",0,'frm_cliente');
		die();
	}
	$mysqli->query("INSERT INTO clientes (username,password,name) VALUES ('$username','$password','$nombre')");
	$q2 = $mysqli->query("SELECT * FROM clientes WHERE username = '$username'");
	$r = mysqli_fetch_array($q2);
	$_SESSION['id_clientes'] = $r['id_clientes'];
	alert("Te has registrado satisfactoriamente",1,'principal');
	die();
	//redir("./");
}
	?>
	<center>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <img src="recursos/multimedia/img/logo1.png" alt="" style="width:200px; height:200px;">
    </div>
		<form method="post" action="" style="font-family: 'Orbitron','Arial'; color: #fff;">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i>Formulario de Registro<h2></label>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirmar Contraseña" name="cpassword"/>
				</div>


				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Nombre" name="nombre"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in"></i> Registrate</button>
				</div>
			</div>
		</form>
	</center>

<?php
if(isset($_SESSION['id_cliente'])){
	redir("./");
}

if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);

	$q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($q)>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id_cliente'] = $r['id'];
		if(isset($return)){
			redir("?p=".$return);
		}else{
			redir("./");
		}
	}else{
		alert("Los datos no son validos");
		redir("?p=login");
	}
}
	?>

<div class="row" style="font-family: 'Orbitron','Arial';">
	<center>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
			<center>
			<img class="img-fluid mx-auto d-block " src="multimedia/img/logo1.png" style="max-width: 100%; height: 150px; border-radius: 10px;">
		</center>
		</div>
		<form method="post" action="">
			<div class="centrar_login">
				<label style="font-size: 25px; color: #fff;"><h2><i class="fa fa-key"></i> Iniciar Sesión</h2></label>
				<br><br>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username" style="font-style: italic;"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password" style="font-style: italic;"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in"></i> Ingresar</button>
				</div>
			</div>
		</form>
	</center>
</div>

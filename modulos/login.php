<?php
if(isset($_SESSION['id_clientes'])){
	redir("./");
}

if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);

	$q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($q)>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id_clientes'] = $r['id_clientes'];
		if(isset($return)){
			redir("?p=".$return);
		}else{

			redir("./");

		}
	}else{
		alert("Los datos no son validos",0,'login');
			//redir("?p=login");
	}


}
	?>


	<center>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<img src="recursos/multimedia/img/logo1.png" alt="" style="width:200px; height:200px;">
		</div>
		<form method="post" action="" style="font-family: 'Orbitron','Arial'; color: #fff;">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i> Iniciar Sesión</h2></label><br><br>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
					<h4><a href="?p=frm_cliente">Registrate</a></h4>
					<br>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" name="enviar" ><i class="fa fa-sign-in"></i> Ingresar</button>
				</div>
			</div>
		</form>
	</center>

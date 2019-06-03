<?php
if(isset($eliminar)){
	$mysqli->query("DELETE FROM admins WHERE id_admins = '$eliminar'");
	redir("?p=frm_admin");
}
if(isset($_SESSION['id_admins'])){
	//redir("");
}

if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);
	$cpassword = clear($cpassword);
	$nombre = clear($nombre);
	$apellido = clear($apellido);
	$fn = clear($fn);
	$direccion = clear($direccion);
	$telefono = clear($telefono);
	$correo = clear($correo);
	$q = $mysqli->query("SELECT * FROM admins WHERE username = '$username'");
	if(mysqli_num_rows($q)>0){
		alert("El usuario ya está en uso",0,'frm_admin');
		die();
	}
	if($password != $cpassword){
		alert("Las contraseñas no coinciden",0,'frm_admin');
		die();
	}
	$mysqli->query("INSERT INTO admins (username,password,name,apellido,fechaNac,direccion,telefono,correo) VALUES ('$username','$password','$nombre','$apellido','$fn','$direccion','$telefono','$correo')");
	$q2 = $mysqli->query("SELECT * FROM admins WHERE username = '$username'");
	$r = mysqli_fetch_array($q2);
	$_SESSION['id_admins'] = $r['id_admins'];
	alert("Te has registrado satisfactoriamente",1,'frm_admin');
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
					<input type="text" autocomplete="off" class="form-control" placeholder="Apellido" name="apellido"/>
				</div>

				<div class="form-group">
				<input type="date" autocomplete="off" class="form-control" placeholder="Fecha de nacimiento" name="fn" id="fechNac"  required/>

				</div>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Direccion" name="direccion"/>
				</div>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Telefono" name="telefono" id="telefono"  name="telefono" required/>

				</div>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Correo" name="correo"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in"></i> Registrate</button>
				</div>
			</div>
		</form>
		<div class="table-responsive">
		<table class="table table-striped" style="font-family: 'Orbitron', 'Arial'; background-color: gray; ">

			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Name</th>
				<th>Apellido</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>Acciones</th>
			</tr>

			<?php
			$prod = $mysqli->query("SELECT * FROM admins ORDER BY id_admins DESC");
	while($rp=mysqli_fetch_array($prod)){

		?>
			<tr>
				<td><?=$rp['username']?></td>
				<td><?=$rp['password']?></td>
				<td><?=$rp['name']?></td>
				<td><?=$rp['apellido']?></td>
				<td><?=$rp['direccion']?></td>
				<td><?=$rp['telefono']?></td>
				<td><?=$rp['correo']?></td>
				<td>

								<a href="?p=modificar_admins&id=<?=$rp['id_admins']?>"><i class="fa fa-edit"></i></a>
								&nbsp;
								<a href="?p=frm_admin&eliminar=<?=$rp['id_admins']?>"><i class="fa fa-times"></i></a>

							</td>
						</tr>
					<?php
				}
			?>

		</table>
		</div>

	</center>

<?php
check_admin();

$id = clear($id);

$q = $mysqli->query("SELECT * FROM admins WHERE id_admins = '$id'");
$rq = mysqli_fetch_array($q);

if(isset($enviar)){
$username = clear($username);
$password = clear($password);
$nombre = clear($nombre);
$apellido = clear($apellido);
$direccion = clear($direccion);
$telefono = clear($telefono);
$correo = clear($correo);

	$mysqli->query("UPDATE admins SET username = '$username',password = '$password',name = '$nombre',apellido = '$apellido',direccion = '$direccion',telefono = '$telefono',correo = '$correo' WHERE id_admins = '$id'");
	redir("?p=frm_admin");

}

?>
<form method="post" action="" enctype="multipart/form-data" style="font-family: 'Orbitron','Arial'; color:#fff;">
	<h1 style="font-family: 'Orbitron','Arial'; color:#fff;">Modificar administradores <span class="icon-stack"></span> </h1>
	<br>
  <div class="form-group">
		<input type="text" class="form-control" name="username" value="<?=$rq['username']?>" placeholder="Username"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="password" value="<?=$rq['password']?>" placeholder="Password"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="nombre" value="<?=$rq['name']?>" placeholder="Nombre de administrador"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="apellido" value="<?=$rq['apellido']?>" placeholder="Apellido de administrador"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="direccion" value="<?=$rq['direccion']?>" placeholder="Direccion"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="telefono" value="<?=$rq['telefono']?>" placeholder="Telefono"/>
	</div>

  <div class="form-group">
		<input type="text" class="form-control" name="correo" value="<?=$rq['correo']?>" placeholder="Correo"/>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Modificar Administradores</button>
	</div>

<input type="hidden" name="id_admins" value="<?=$id?>"/>

</form>
?>

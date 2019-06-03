<?php
require '../modulos/daoAdmins.php';
$men="";
$ob=new DaoAdmins();
//guardar
if (isset($_REQUEST["guardar"])) {
	$e=new Admins($_REQUEST["id_admins"],$_REQUEST["username"],$_REQUEST["password"],$_REQUEST["name"],$_REQUEST["apellido"],$_REQUEST["fechaNac"],$_REQUEST["direccion"],$_REQUEST["telefono"],$_REQUEST["correo"]);
	$ob->insertarAdmins($e);
	$men="Registro guardado Correctamente";
}
//modificar
if (isset($_REQUEST["modificar"])) {
	$e=new Admins($_REQUEST["id_admins"],$_REQUEST["username"],$_REQUEST["password"],$_REQUEST["name"],$_REQUEST["apellido"],$_REQUEST["fechaNac"],$_REQUEST["direccion"],$_REQUEST["telefono"],$_REQUEST["correo"]);
	$ob->modificarAdmins($e);
	$men="Registro modificado Correctamente";
}
//eliminar
if (isset($_REQUEST["eliminar"])) {
	$e=new Admins($_REQUEST["id_admins"],$_REQUEST["username"],$_REQUEST["password"],$_REQUEST["name"],$_REQUEST["apellido"],$_REQUEST["fechaNac"],$_REQUEST["direccion"],$_REQUEST["telefono"],$_REQUEST["correo"]);
	$ob->eliminarAdmins($e);
	$men="Registro eliminado Correctamente";
}

if (isset($_REQUEST["m"])) {
	$r1=$ob->mostrarAdmins();
	$a1=array();
	while ($row=mysqli_fetch_array($r1)) {
		$a1[]=$row;
	}
	$json1=json_encode($a1);
}

header("Location:../modulos/frm_admin.php?emp=$json1&res=$men");	

?>

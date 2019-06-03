<?php
require 'conexion.php';
require 'clsAdmins.php';

class DaoAdmins extends Conexion
{
	function __construct()
	{
		parent::__construct();
	}
	function mostrarAdmins(){
		$res=$this->con->query("select * from admins");
		return $res;
	}
	function insertarAdmins($e){
		$para=$this->con->prepare("insert into admins(id_admins,username,password,name,apellido,fechaNac,direccion,telefono,correo) values(?,?,?,?,?,?,?,?,?)");
		$para->bind_param('sssssssss', $a,$b,$c,$d,$f,$g,$h,$i,$j);
		$a='';
		$b=$e->getUsername();
		$c=$e->getPassword();
		$d=$e->getName();
		$f=$e->getApellido();
		$g=$e->getFechaNac();
		$h=$e->getDireccion();
		$i=$e->getTelefono();
		$j=$e->getCorreo();
		$para->execute();
	}
	function modificarAdmins($e){
		$para=$this->con->prepare("update admins set username=?,password=?,name=?,apellido=?,fechaNac=?,direccion=?,telefono=?,correo=? where id_admins=?");
		$para->bind_param('sssssssss', $a,$b,$c,$d,$f,$g,$h,$i,$j);
		$a=$e->getUsername();
		$b=$e->getPassword();
		$c=$e->getName();
		$d=$e->getApellido();
		$f=$e->getFechaNac();
		$g=$e->getDireccion();
		$h=$e->getTelefono();
		$i=$e->getCorreo();
		$j=$e->getId_admins();
		$para->execute();
	}
	function eliminarAdmins($e){
		$para=$this->con->prepare("delete from admins where id_admins=?");
		$para->bind_param('s', $a);
		$a=$e->getId_admins();
		$para->execute();
	}
}
?>

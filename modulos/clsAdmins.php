<?php
/**
 *
 */
class Admins
{
	private $id_admins;
	private $username;
	private $password;
	private $name;
	private $apellido;
	private $fechaNac;
	private $direccion;
	private $telefono;
	private $correo;

	function __construct($id_admins,$username,$password,$name,$apellido,$fechaNac,$direccion,$telefono,$correo)
	{
		$this->id_admins=$id_admins;
		$this->username=$username;
		$this->password=$password;
		$this->name=$name;
		$this->apellido=$apellido;
		$this->fechaNac=$fechaNac;
		$this->direccion=$direccion;
		$this->telefono=$telefono;
		$this->correo=$correo;
	}
	function getId_admins(){
		return $this->id_admins;
	}
	function getUsername(){
		return $this->username;
	}
	function getPassword(){
		return $this->password;
	}
	function getName(){
		return $this->name;
	}
	function getApellido(){
		return $this->apellido;
	}
	function getFechaNac(){
		return $this->fechaNac;
	}
	function getDireccion(){
		return $this->direccion;
	}
	function getTelefono(){
		return $this->telefono;
	}
	function getCorreo(){
		return $this->correo;
	}
}
?>

<?php


$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "tienda";


$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

function clear($var){
	htmlspecialchars($var);
	return $var;
}

function check_admin(){
	if(!isset($_SESSION['id_admins'])){
		redir("./");
	}
}

function redir($var){
	?>
	<script>
		window.location="<?=$var?>";
	</script>
	<?php
	die();
}

function alert($txt,$type,$url){
	//"error", "success" and "info".
	if($type==0){
		$t = "error";
	}elseif($type==1){
		$t = "success";
	}elseif($type==2){
		$t = "info";
	}else{
		$t = "info";
	}
	echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
	echo '$(".swal-button").click(function(){ window.location="?p='.$url.'"; });';
	echo '</script>';
}

function check_user($url){
	if(!isset($_SESSION['id_clientes'])){
		redir("?p=login&return=$url");
	}else{

	}

}

function nombre_cliente(){
	$mysqli = connect();

	$q = $mysqli->query("SELECT clientes.name FROM clientes");
	$r = mysqli_fetch_array($q);
	return $r['name'];
}
function nombre_admins($id_admins){
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM admins WHERE id_admins = '$id_admins'");
	$r = mysqli_fetch_array($q);
	return $r['name'];
}

function connect(){
	$host_mysql = "localhost";
	$user_mysql = "root";
	$pass_mysql = "";
	$db_mysql = "tienda";


 	$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

	return $mysqli;
}

function fecha($fecha){
	$e = explode("-",$fecha);

	$year = $e[0];
	$month = $e[1];
	$e2 = explode(" ",$e[2]);
	$day = $e2[0];
	$time = $e2[1];

	$e3 = explode(":",$time);
	$hour = $e3[0];
	$mins = $e3[1];

	return $day."/".$month."/".$year." ".$hour.":".$mins;

}

function estado($id_estado){
		if($id_estado == 0){
			$status = "Iniciando";
		}elseif($id_estado==1){
			$status = "Preparando";
		}elseif($id_estado == 2){
			$status = "Denegado";
		}elseif($id_estado == 3){
			$status = "Finalizado";
		}else{
			$status = "Indefinido";
		}

		return $status;

}

function admin_name_connected(){
	include "config.php";
	$id = $_SESSION['id_admins'];
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM admins WHERE id_admins = '$id'");
	$r = mysqli_fetch_array($q);

	return $r['name'];

}

function estado_pago($estado){
	if ($estado==0) {
		$estado = "Sin verificar";
	}
	elseif ($estado==1) {
		$estado = "Verificado y Aprobado";
	}
	elseif ($estado==2) {
		$estado = "Reembolsado";
	}
	else {
		$estado = "Sin verificar";
	}

	return $estado;
}
?>

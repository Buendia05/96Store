<?php
include "configs/config.php";
include "configs/funciones.php";

if(!isset($p)){
	$p = "principal";
}else{
	$p = $p;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="plugins/css/index.css"/>
	<link rel="stylesheet" href="plugins/css/fonts.css"/>
	<link rel="stylesheet" href="plugins/css/estilo.css"/>
	<link rel="stylesheet" href="plugins/css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Orbitron:500,700" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="shortcut icon" href="recursos/multimedia/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css"/>
	<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="recursos/fontawesome/css/all.css"/>
	<script type="text/javascript" src="recursos/fontawesome/js/all.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="plugins/js/sweetalert2.all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- slider2  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>

	<!-- sliderfin -->
	<style type="text/css">
		.bloqueizquierdo{
			background-color: green;
			height: 100px;
			padding: 0;
		}
		.logo{
			max-width: 100%;
			height: 100px;
			padding: 0;
		}
		.bloquecentro{
			background-color: yellow;
			height: 100px;
		}
		.bloquederecho{
			background-color: red;
			height: 100px;
		}
		.carritot{
			background: #ff8800;
			color: white;
			padding: 10px;
			border-radius: 4px 4px 0px 0px;
			position: fixed;
			width: 300px;
			right: 0px;
			bottom: 0px;
			cursor:pointer;
		}
		.carritob{
			background: #fff;
			color: #333;
			padding: 10px;
			width: 300px;
			position: fixed;
			height: 350px;
			bottom: -350px;
			right: 0px;
			overflow-y: scroll;
		}
		.cant{
			width: 50px;
			height: 35px;
			display: inline-block;
			padding: 5px;

		}
/*menu de navegacion*/
*{
	padding: 0;
	margin: 0;
	-webkit-box-sizing:  border-box;
	-moz-box-sizing: border-box;
	-box-sizing: border-box;
}
body{
	background-color: red;
}
.menu_bar{
	display: none;
}
.bloqueoculto{
	display: none;
}
header{
	width: 100%;
}
header nav{
	background: #023859;
	z-index: 10000;
	max-width: 700px;
	width: 95%;
	margin: 20px auto;
}
header nav ul{
	list-style: none;
}
header nav ul li{
	display: inline-block;
	position: relative;
}
header nav ul li:hover{
	background: #E6344A;
}

header nav ul li a{
	color: #fff;
	display: block;
	text-decoration: none;
	padding: 10px;
	font-family: Orbitron, Arial;
	font-size: 14px;

}
header nav ul li a:hover {
	text-decoration: none;
}
header nav ul li a span{
	margin-right: 5px;
}
header nav ul li:hover .children{
	display: block;
}
header nav ul li .children{
	display: none;
	background: #011826;
	position: absolute;
	z-index: 10000;
}
header nav ul li .children li{
	display: block;
	overflow: hidden;
	border-bottom: 1px solid rgba(255,255,255,.5);
}
header nav ul li .children li a{
	display: block;
}
@media (max-width: 992px){

	body{
		padding-top: 80px;
	}
	body .container-fluid nav .menu{
		display: none;
	}
	.menu_bar{
		display: block;
		width: 100%;
		position: fixed;
		top: 0;
		background: #E6344A;
		z-index: 10000;
	}
	.menu_bar .bt-menu{
		display: block;
		padding: 20px;
		color: #fff;
		overflow: hidden;
		font-size: 25px;
		font-weight: bold;
		text-decoration: none;
		z-index: 10000;
	}
	.menu_bar span{
		float: left;
		font-size: 70px;
	}
	header nav{
		width: 80%;
		height: calc(100%-80px);
		position: fixed;
		left: 100%;
		margin: 0;
		overflow: scroll;
	}
	header nav ul li{
		display: block;
		border-bottom: 1px solid rgba(255,255,255,.5);
	}
	header nav ul li:hover .children{
		display: none;
	}
	header nav ul li a{
		display: block;
	}
	header nav ul li .children{
		width: 100%;
		position: relative;
	}
	header nav ul li .children li a{
		margin-left: 20px;
	}
	header nav ul li .caret{
		float: right;
	}
	#logo{
		width: 80px;
		height: 80px;
	}
	.bloqueoculto{
		display: block;
	}
	.bt-inicio{
		margin: 0;
		padding: 0;
		height: 100%;
	}
	.bt-buscar{
		margin-top: 20px;
		padding: 0;
		height: 100%;
	}
	.bt-carro{
		margin-top: 20px;
		padding: 0;
		height: 100%;
	}
	.bt-sesion{
		margin-top: 20px;
		padding: 0;
		height: 100%;
	}
}

.footer{
	background:#0B1A53;
	color:#fff;
	text-align:center;
	font-size:14px;
	padding:0;
	clear: both;
	height: 100px;
	max-width: 100%;
}
.footer3{
	background:#0B1A53;
	color:#fff;
	text-align:center;
	font-size:14px;
	padding:0;
	clear: both;
	height: 100px;
	max-width: 100%;
}

/*estilos de slider y contendor de la izquierda*/
.contenedorslider1{
	width: 100%;
	height: auto;
}
.contendor2{
 	width: 100%;
 }
.cuerpo{
	background-color: blue;
	height: auto;
	float: center;
	width: 100%;
	/*min-height:auto;*/
}

.barra1{
	display: block;
	margin: 10px auto;
	background-color: #1E1E1E;
	opacity: 8;
	height: auto;
	float: left;
	border-radius: 10px;
	-webkit-box-shadow: 0px 0px 20px -2px #FFFFFF;
    box-shadow: 0px 0px 20px -2px #FFFFFF;
		font-family: 'Orbitron','Arial';
}

.barra1 .lis{
	color: #F8F2F2;
}
.barra1 a{
	text-decoration: none;
	display: block;
	color: #66C8FC;
	padding: 8px;
}
.barra1 hr{
	border-color: #008999;
}

.centrar_login{
	width:40%;
	text-align: center;
	padding-top:100px;
}

.producto{
	display:inline-block;
	width:25%;
	padding:10px;
	background: rgba(0,0,0,0.05);
	color:#333;
	margin:5px;
}

.img_producto{
	text-align: center;
	width:320px;
	height:322px;
}

.name_producto{
	padding:10px;
	color:#fff;
	background:#ff8800;
	text-align: center;
	font-size:18px;
	font-weight: bold;
}

.precio{
	color:#00aa00;
	padding:20px;
}

.subir{
	position: relative;
	bottom: 10px;
}

.imagen_carro{
	width:50px;
	height:50px;
	border-radius: 1000px;
}

.text-green{
	color:#0a0;

}
.contereseña{
	width: 70%;
	height: auto;
	float: right;
}
/*limites */
@media (max-width:992px) {
    .barra1{
        display: none;
    }
    .bloqueizquierdo{
    	display: none;
    }
    .footer3{
			display: none;
    }
    .bloquecentro{
    	display: none ;
    	height: 100px;
    }
    .bloquederecho{
    	display: none;
    }
		.bloqueoculto{
			margin-top: 30px;
		}

}
@media (min-width:992px) and (max-width:1200px){
		.bloquecentro{
			max-height: 70px;
		}
		.cajacarrito{
			min-height: 50px;
			padding-left: 30px;
			padding-top: 15px;
		}
		.cajabuscar{
			display: block;
			float: right;
			top: -50px;
			max-height: 50px;
		}
		.cajabuscar .form-inline{
			margin-top: -13px;
			float: right;
		}
		.cuerpo{
			margin-top: -50px;
		}
		.asideizq{
			margin-top: -50px;
		}
		.barra1{
			font-size: 14px;
		}
		.footer2 .fb > i{
			display: /* BUG:  */;
		}
}

	</style>
	<script type="text/javascript">
		function minimizer(){
			var minimized = $("#minimized").val();
			if (minimized ==0) {
				//mostrar
				$(".carritot").css("bottom","350px");
				$(".carritob").css("bottom","0px");
				$("#minimized").val('1');
			}
			else {
				//minimized
				$(".carritot").css("bottom","0px");
				$(".carritob").css("bottom","-350px");
				$("#minimized").val('0');
			}
		}
	</script>
	<title>96 Store</title>
</head>
<body>
	<div class="container-fluid">
			<div class="menu_bar col-xs-12 col-sm-12">
				<div class="row">
				<div class="bt-inicio col-xs-4 col-sm-4"><a href="#" class="bt-menu"><span class="icon-list2"></span></a></div>
				<div class="bt-carro col-xs-4 col-sm-4"><a href="?p=carrito"><span class="icon-shopcart" style="float:center; color: #fff;"></span></a></div>
				<div class="bt-sesion col-xs-4 col-sm-4"><a href="#"><img id="logo" style="float:center;" src="recursos/multimedia/img/logo.png" alt=""></a></div>
			</div>
			</div>

			<div class="bloqueoculto">
			<header>
					<nav class="menu">
						<ul>
							<li><a href="?p=home"><span></span>TU TIENDA</a></li>
							<li class="submenu">
								<a href="#"><span></span>JUEGOS <span class="caret circle-down"></span></a>
								<ul class="children">
									<li><a href="#">Free to Play<span></span></a></li>
									<li><a href="?p=gtav">Accion<span></span></a></li>
									<li><a href="#">Casual<span></span></a></li>
									<li><a href="#">Aventura<span></span></a></li>
									<li><a href="#">Deportes<span></span></a></li>
									<li><a href="#">Estrategia<span></span></a></li>
								</ul>
							</li>
							<li><a href="?=principal"><span></span>BIBLIOTECA</a></li>
							<li><a href="?p=noticias"><span></span>NOTICIAS</a></li>
							<li><a href="?p=reseñas"><span></span>RESEÑAS</a></li>
							<li><a href="?p=acercade"><span></span>ACERCA DE</a></li>
							<li><a href="?p=productos"><span></span>Explorar</a></li>
							<li><a href="?p=admin"><span></span>Mantenimiento</a></li>
							<br>
							<li><a href="?p=login" style="font-style: italic;"><span class="icon-users"></span>Iniciar Sesión</a></li>
							<div style="padding-top:20px;"><?php
								if(isset($_SESSION['id_admins'])){
							?>
							<a class="pull-right subir icon-exit" href="?p=salir" style="color:lightgreen;"><span style="font-family: 'Orbitron';">Salir</span></a>
							<a class="pull-right subir icon-users" href="#" style="color:lightgreen;"><span style="font-family: 'Orbitron';"><?=nombre_admins($_SESSION['id_admins'])?></span></a>

							<?php
								}
								else if(isset($_SESSION['id_clientes'])){
									?>
									<a class="pull-right subir icon-exit" href="?p=salir" style="color:white;"><p style="font-family: 'Orbitron';">Salir</p></a>
									<a class="pull-right subir icon-users" href="#" style="color:white;"><p style="font-family: 'Orbitron';"><?=nombre_cliente($_SESSION['id_clientes'])?></p></a>
									</div>
								<?php
								}
							?>
						</div>

						</ul>
					</nav>
				</header>
				</div>
			<div class="bloqueizquierdo col-xs-12 col-sm-12 col-md-12 col-lg-2 d-xs-none d-sm-none">
				<center>
				<img class="logo" src="recursos/multimedia/img/logo1.png" alt="">
				</center>
			</div>
			<div class="bloquecentro col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<header>
					<nav class="menu">
						<ul>
							<li><a href="?p=home"><span></span>TU TIENDA</a></li>
							<li class="submenu">
								<a href="#"><span></span>JUEGOS <span class="caret circle-down"></span></a>
								<ul class="children">
									<li><a href="#">Free to Play<span></span></a></li>
									<li><a href="?p=gtav">Accion<span></span></a></li>
									<li><a href="#">Casual<span></span></a></li>
									<li><a href="#">Aventura<span></span></a></li>
									<li><a href="#">Deportes<span></span></a></li>
									<li><a href="#">Estrategia<span></span></a></li>
								</ul>
							</li>
							<li><a href="?=principal"><span></span>BIBLIOTECA</a></li>
							<li><a href="?p=noticias"><span></span>NOTICIAS</a></li>
							<li><a href="?p=reseñas"><span></span>RESEÑAS</a></li>
							<li><a href="?p=acercade"><span></span>ACERCA DE</a></li>
						</ul>
					</nav>
				</header>
			</div>
			<div class="bloquederecho col-xs-12 col-sm-12 col-md-12 col-lg-2">
			<div class="row">
				<div class="cajacarrito col-xs-6 col-sm-6 col-md-6 col-lg-12" style="background-color: blue; height: 25px;">
					<span class="sesion float-left icon-users" style="color: #fff;">
						<a href="?p=productos" style="font-family: 'Orbitron'; font-size: 10px; color: #fff;">Iniciar Sesi&oacute;n</a>
					</span>
					<span class="cart icon-shopcart float-right" style="color: #fff;">
						<a href="?p=carrito" style="font-family: 'Orbitron'; font-size: 10px; color: #fff;">Carrito</a>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="cajabuscar col-xs-6 col-sm-6 col-md-6 col-lg-12" style="font-family: 'Orbitron','Arial'; font-size: 16px; background-color: gray; height: 75px;">
					<div class="row">
					<div class="col-lg-12" style="padding-top:25px;">
						<?php
							if(isset($_SESSION['id_admins'])){
						?>

						<a class="pull-right subir icon-exit" href="?p=salir" style="color:lightgreen;"><p style="font-family: 'Orbitron';">Salir</p></a>
						<a class="pull-right subir icon-users" href="#" style="color:lightgreen;"><p style="font-family: 'Orbitron';"><?=nombre_admins($_SESSION['id_admins'])?></p></a>

						<?php
							}
							else if(isset($_SESSION['id_clientes'])){
								?>

								<a class="pull-right subir icon-exit" href="?p=salir" style="color:white;"><p style="font-family: 'Orbitron';">Salir</p></a>
								<a class="pull-right subir icon-users" href="#" style="color:white;"><p style="font-family: 'Orbitron';"><?=nombre_cliente($_SESSION['id_clientes'])?></p></a>
								</div>
							<?php
							}
						?>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="margin-top:30px;">
		<div class="row">
	<div class="asideizq col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-color: blue;">
	<div class="barra1">
    <hr>
		<a class="lis" href="?p=admin">Mantenimiento</a>
		<br>
		<a class="lis" href="?p=frm_admin">Registro Admin</a>
    <hr>
		<a class="lis" href="?p=productos">Explorar Categorias</a>
		<br>
		<a class="lis" href="?p=miscompras">Mis Compras</a>
    <hr>
		<a href="">Los mas vendido</a>
		<a href="">Actualizaciones recientemente</a>
		<a href="">Novedades</a>
		<a href="">Proximamente</a>
		<a href="">Ofertas</a>
    <hr>
		<a class="lis" href="">Explorar por genero</a>
    <hr>
		<a href="">Free to play</a>
		<a href="">Accion</a>
		<a href="">Carreras</a>
		<a href="">Casual</a>
		<a href="">Deportes</a>
		<a href="">Estrategias</a>
    <hr>
		<a class="lis" href="">Vistos Recientemente</a>
    <hr>
		<a href=""></a>
		<a href=""></a>
	</div>
</div>
<!-- body -->
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
	<div class="cuerpo">
		<?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}else{
				echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
			}
		?>
	</div>
</div>
</div>
<!--mini carrito-->
<div class="carritot" onclick="minimizer()" style="font-family: 'Orbitron','Arial';">
	Carrito de Compra
	<input type="hidden" id="minimized" value="0"/>
</div>
<div class="carritob">
	<table class="table table-striped" style="font-family: 'Orbitron','Arial'; background-color: gray;">
		<tr>
			<th>Nombre del producto</th>
			<th>Cantidad</th>
			<th>Precio</th>
		</tr>
	<?php
	$id_clientes = clear($_SESSION['id_clientes']);
	$q = $mysqli->query("SELECT * FROM carro WHERE id_clientes = '$id_clientes'");
	$monto_total = 0;
	while($r = mysqli_fetch_array($q)){
		$q2 = $mysqli->query("SELECT * FROM productos WHERE id_productos = '".$r['id_productos']."'");
		$r2 = mysqli_fetch_array($q2);

		$preciototal = 0;
				if($r2['oferta']>0){
					if(strlen($r2['oferta'])==1){
						$desc = "0.0".$r2['oferta'];
					}else{
						$desc = "0.".$r2['oferta'];
					}

					$preciototal = $r2['price'] -($r2['price'] * $desc);
				}else{
					$preciototal = $r2['price'];
				}

		$nombre_producto = $r2['name'];

		$cantidad = $r['cant'];

		$precio_unidad = $r2['price'];
		$precio_total = $cantidad * $preciototal;
		$imagen_producto = $r2['imagen'];

		$monto_total = $monto_total + $precio_total;

		?>
			<tr>
				<td><?=$nombre_producto?></td>
				<td><?=$cantidad?></td>
				<td><?=$precio_unidad?> <?=$divisa?></td>
			</tr>
		<?php
	}
	?>
	</table>
	<br>
	<span style="font-family: 'Orbitron','Arial';">Monto Total: <b class="text-green" style="font-family: 'Orbitron','Arial';"><?=$monto_total?> <?=$divisa?></b></span>

	<br><br>
	<form method="post" action="?p=carrito" style="font-family: 'Orbitron','Arial';">
		<input type="hidden" name="monto_total" value="<?=$monto_total?>"/>
		<button class="btn btn-primary" type="submit" name="finalizar"><i class="fa fa-check"></i> Finalizar Compra</button>
	</form>
</div>

<!-- footer -->
	<div class="footer3 col-xs-12 col-sm -12 col-md-12 col-lg-12" style="margin-top: 20px; height: 150px;">
	<div class="row">
		<div class="col-xs-1" style="max-width: 100%; height: 150px; background-color: skyblue;">
		</div>
		<div class="col-xs-10" style="max-width: 100%; height: 150px; background-color: pink; padding-top: 10px">
			<div class="row">
				<div class="col-xs-4">
					<hr style="color: #fff;">
				</div>
				<div class="col-xs-4">
					<h3 style="font-family: Orbitron, Arial; color: #fff; text-align: center;">¿Qué esperas para unirte?</h3>
				</div>
				<div class="col-xs-4">
					<hr style="color: #fff;">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<center style="font-family: Orbitron, Arial">
						Inicia sesión para unirte a nuestra comunidad<br><br>
						<a href="?p=login"><button class="btn btn-primary">Iniciar sesión</button></a><br><br>
						o <b><a href="?p=frm_cliente">regístrate</a> y únete a 96Store de forma gratuita</b>
					</center>
				</div>
			</div>
		</div>
		<div class="col-xs-1" style="max-width: 100%; height: 150px; background-color: skyblue;">
		</div>
	</div>
	</div>
	<div class="footer col-xs-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			<div class="col-xs-12"></div>
			<div class="logo col-xs-12 col-lg-1 col-sm-12 col-md-1" style="background-color: green; height: 100px;">
				<center>
					<img style="width: 75px; height: 75px; padding-top: 20px;" src="recursos/multimedia/img/logo1.png" alt="">
				</center>
			</div>
			<div class="col-xs-12 col-lg-9 col-md-9 col-sm-12 " style="background-color: blue; height: 100px; font-size: 1vw; font-family: Orbitron, Arial; padding: 20px; text-align: justify;">
				<div class="row">
					<div class="col-xs-12" style="border-top: 1px solid #fff; padding-top: 5px; border-bottom: 1px solid #fff; padding-bottom: 5px;">
						Copyright 96Store &copy; <?=date("Y")?>. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en EE.UU y otros paises.
						Todos los precios incluyen IVA (donde sea aplicable).
					</div>
				</div>
				<div class="footer2 row" style="padding-top: 5px;">
					<div class="us col-xs-2 " style="background-color: olive; height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="?p=acercade"><span class="icon-home" style="color: white;"><i style="color: #fff; font-family: Orbitron, Arial; font-size: 1vw;">Acerca de</i></span></a></span>
					</div>
					<div class="fb col-xs-2" style="background-color: skyblue;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://www.facebook.com/"><span class="icon-facebook2" style="color: blue;"><i style="color: #fff; font-family: Orbitron, Arial; font-size: 1vw;">Facebook</i></span></a></span>
					</div>
					<div class="in col-xs-2" style="background-color: pink;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://www.instagram.com/"><span class="icon-instagram" style="color: #fff;"><i style="color: #fff; font-family: Orbitron, Arial; font-size: 1vw;">Instagram</i></span></a></span>
					</div>
					<div class="tw col-xs-2" style="background-color: gray;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://twitter.com/?lang=es"><span class="icon-twitter" style="color: skyblue;"><i style="color: #fff; font-family: Orbitron, Arial; font-size: 1vw;">Twitter</i></span></a></span>
					</div>
					<div class="yt col-xs-2" style="background-color: skyblue;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://www.youtube.com/"><span class="icon-youtube" style="color: red;"><i style="color: #fff; font-family: Orbitron, Arial; font-size: 1vw;">Youtube</i></span></a></span>
					</div>
					<div class="pi col-xs-2" style="background-color: pink;  height: 25px; padding-top: 5px; text-align: right;">
						<a href="https://www.pinterest.es/"><span class="icon-pinterest" style="color: orange;"><i style="color: #fff; font-family: Orbitron, Arial; font-size: 1vw;">Pinterest</i></span></a></span>
					</div>
				</div>
			</div>
			<div class="col-xs-1" style="background-color: red; height: 100px;"></div>
		</div>
	</div>

</div>
	</div>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>
  <script  src="plugins/js/index.js"></script>
  <script src="http://code.jquery.com/jquery-lastest.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.js"></script>
	<script type="text/javascript" src="plugins/js/app.js"></script>
  <script src="plugins/js/main.js"></script>

</body>
</html>

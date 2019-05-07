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
	<link rel="stylesheet" href="css/index.css"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<link rel="stylesheet" href="css/estilo.css"/><script type="text/javascript" src="js/main.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Orbitron:500,700" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="shortcut icon" href="multimedia/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- ocultar mediante script -->
	<script>
		@document
	</script>

	<!-- slider2  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>

      <link rel="stylesheet" href="css/style.css">

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
	<title>96 Store</title>
</head>
<body>
	<div class="container-fluid">
			<div class="menu_bar col-xs-12 col-sm-12">
				<div class="row">
				<div class="bt-inicio col-xs-2"><a href="#" class="bt-menu"><span class="icon-list2"></span></a></div>
				<div class="bt-buscar col-xs-6 col-sm-6">
					<div class="navbar navbar-expand-sm bg-dark navbar-dark" style="float: center; padding-top:5px;">
					<form class="form-inline" action="/action_page.php">
						<input class="form-control mr-sm-2 col-xs-1" type="text" placeholder="Buscar" style="font-family: 'Orbitron','Arial'; font-style: italic; width: 100px; height:60px; margin-left: 50px; position: relative;">
						<button class="btn btn-success col-xs-1" type="submit" style="height:60px; width: 75px; background-color: blue;"><span class="icon-search" style="font-size: 50px;"></span></button>
					</form>
				</div>
				</div>
				<div class="bt-carro col-xs-2"><a href="#"><span class="icon-shopcart" style="float:center; color: #fff;"></span></a></div>
				<div class="bt-sesion col-xs-2"><a href="#"><img id="logo" style="float:center;" src="multimedia/img/logo.png" alt=""></a></div>
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
							<li><a href="#"><span></span>BIBLIOTECA</a></li>
							<li><a href="?p=noticias"><span></span>NOTICIAS</a></li>
							<li><a href="?p=reseñas"><span></span>RESEÑAS</a></li>
							<li><a href="?p=acercade"><span></span>ACERCA DE</a></li>
						</ul>
					</nav>
				</header>
				</div>
			<div class="bloqueizquierdo col-xs-12 col-sm-12 col-md-12 col-lg-2 d-xs-none d-sm-none">
				<center>
				<img class="logo" src="multimedia/img/logo1.png" alt="">
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
							<li><a href="#"><span></span>BIBLIOTECA</a></li>
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
				<div class="cajabuscar col-xs-6 col-sm-6 col-md-6 col-lg-12" style="background-color: black; height: 75px;">
					<div class="row">
					<div class="navbar navbar-expand-sm bg-dark navbar-dark col-lg-12" style="padding-top:20px;">
					<form class="form-inline" action="/action_page.php">
						<input class="form-control mr-sm-2" type="text" placeholder="Buscar" style="font-family: 'Orbitron','Arial'; font-style: italic; width: 100px; height:35px; margin-left: 20px; position: relative;">
						<button class="btn btn-success" type="submit" style="height:35px; width: 35px; background-color: blue;"><span class="icon-search" style="font-size: 25px; margin-left: -8px;"></span></button>
					</form>
				</div>
				</div>
				</div>
			</div>
			</div>
		</div>


		<?php
			if(isset($_SESSION['id_cliente'])){
		?>

		<a class="pull-right subir" href="?p=salir">Salir</a>
		<a class="pull-right subir" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>

	</div>
		<?php
			}
		?>
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
			<div class="col-xs-1"></div>
			<div class="logo col-xs-1" style="background-color: green; height: 100px;">
				<center>
					<img style="width: 75px; height: 75px; padding-top: 20px;" src="multimedia/img/logo1.png" alt="">
				</center>
			</div>
			<div class="col-xs-9" style="background-color: blue; height: 100px; font-size: 12px; font-family: Orbitron, Arial; padding: 20px; text-align: justify;">
				<div class="row">
					<div class="col-xs-12" style="border-top: 1px solid #fff; padding-top: 5px; border-bottom: 1px solid #fff; padding-bottom: 5px;">
						Copyright 96Store &copy; <?=date("Y")?>. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en EE.UU y otros paises.
						Todos los precios incluyen IVA (donde sea aplicable).
					</div>
				</div>
				<div class="footer2 row" style="padding-top: 5px;">
					<div class="us col-xs-2" style="background-color: olive; height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<span><a href="?p=acercade" style="color: #fff;">ACERCA DE</a></span>
					</div>
					<div class="fb col-xs-2" style="background-color: skyblue;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://www.facebook.com/"><span class="icon-facebook2" style="color: blue;"><i style="color: #fff; font-family: Orbitron, Arial;">96Store</i></span></a></span>
					</div>
					<div class="in col-xs-2" style="background-color: pink;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://www.instagram.com/"><span class="icon-instagram" style="color: #fff;"><i style="color: #fff; font-family: Orbitron, Arial;">96Store</i></span></a></span>
					</div>
					<div class="tw col-xs-2" style="background-color: gray;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://twitter.com/?lang=es"><span class="icon-twitter" style="color: skyblue;"><i style="color: #fff; font-family: Orbitron, Arial;">96Store</i></span></a></span>
					</div>
					<div class="yt col-xs-2" style="background-color: skyblue;  height: 25px; padding-top: 5px; border-right: 1px solid #fff; text-align: right;">
						<a href="https://www.youtube.com/"><span class="icon-youtube" style="color: red;"><i style="color: #fff; font-family: Orbitron, Arial;">96Store</i></span></a></span>
					</div>
					<div class="pi col-xs-2" style="background-color: pink;  height: 25px; padding-top: 5px; text-align: right;">
						<a href="https://www.pinterest.es/"><span class="icon-pinterest" style="color: orange;"><i style="color: #fff; font-family: Orbitron, Arial;">96Store</i></span></a></span>
					</div>
				</div>
			</div>
			<div class="col-xs-1" style="background-color: red; height: 100px;"></div>
		</div>
	</div>

</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>
    <script  src="js/index.js"></script>
    <script src="http://code.jquery.com/jquery-lastest.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

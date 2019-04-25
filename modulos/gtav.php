
<style>
	/*pagina de juegos */
	.contanedorgta{
		position: relative;
		width: 100%;
		height: auto;
		background-color: #171146;
		border-radius: 15px;
		-webkit-box-shadow: 0px 0px 20px -2px #94E0FF;
		padding-left: 20px;
		padding-right: 20px; 

	}
	.contplay{
		 
		margin-bottom: 10px;
		width: 100%;
		height: auto;

	}
	.contventa{
		
		margin-bottom: 20px;
		width: 100%;
		height: 60px;
		background-color: #121860;
	}
	.contventa label{
		color: white;
		width: 400px;
		font-size: 20px;
		font-family: Orbitron, Arial;
		padding: 10px;
	}
	.carrito{
		width: 300px;
		height: 34px;
		float: right;
		
		border-radius: 0px 15px 15px 0px;
		border: 3px double #F7FBF7;
		background-color: #000000;
	}
	.carrito p{
		width: 20%;
		float: left;
		color: #FFFFFF;
		padding: 4px;
		font-size: 15px;
		font-family: Orbitron, Arial;
	}
	.carrito a {
		width: 220px;
		float: right;
		text-decoration: none;
		padding: 3px;
		padding-left: 10px;
		padding-right: 10px;
		font-family: cursive;
		font-weight: 300;
		font-size: 15px;
		font-style: italic;
		color: #006505;
		background-color: #82b085;
		border-radius: 15px;
		border: 3px double #006505;
		color: #FFFFFF;
	}
	.carrito a:hover{
		opacity: 0.6;
		text-decoration: none;
	}
	.cont1{
		

		margin-bottom: 20px;
		width: 100%;
		height: auto;
		background-color: #121860;

	}
	.cont1 p{
		padding-left: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		color: #FFFFFF;
		font-family: sans-serif;
	}
	.cont1 h2{
		font-size: 25px;
		padding: 15px;

		color:#fff;
  letter-spacing: 3px;
  font-weight:700;
  text-transform:uppercase;
  animation:blur 2s ease-out infinite;
  text-shadow:0px 0px 5px #000000,
      0px 0px 7px #00FCFF;
		
	} 
	.cont2{
		padding-bottom: 20px;
		background-color: #121860;
		width: 100%;
		height: auto;
	}
	.cont2 label{
		font-size: 25px;
		padding: 15px;

		color:#fff;
  letter-spacing: 3px;
  font-weight:700;
  text-transform:uppercase;
  animation:blur 2s ease-out infinite;
  text-shadow:0px 0px 5px #000000,
      0px 0px 7px #00FCFF;
	}
	.minino{
		border-radius: 15px;
		border: 3px double #00FDFA;
		width: 450px;
		height: auto;
		margin-left: 5px;
	}
	.minino li{
		margin-left: 10px;
		padding: 5PX;
		color: #A9A7A7;
	}
	.minino h2{
		font-size: 20px;
		padding-top: 10px;
		padding-bottom: 10px;
		color: #FD0000;
		
	}
	.recomenda{
		margin:5px;
		border-radius: 15px;
		border: 3px double #00FDFA;
		width: 450px;
		height: auto;
		
	}
	.recomenda li{
		margin-left: 10px;
		padding: 5PX;
		color: #A9A7A7;
	}
	.recomenda h2{
		font-size: 20px;
		padding-top: 10px;
		padding-bottom: 10px;
		color: #FD0000;
		margin-left: 20px;
	}
	.contgta{
	 
		margin-bottom: 10px;
		width: 100%;
		height: auto;
	}

	@media (max-width:778px) {
		.contanedorgta{
			width: 100%;
		}
		.minino{
			width: 100%;
		}
		.recomenda{
			width: 100%;
		}
	}
</style>

<div class="contanedorgta">
	<h2 style="font-size: 25px;padding: 15px;color:#fff;letter-spacing: 3px;font-weight:700;text-transform:uppercase;
  animation:blur 2s ease-out infinite;
  text-shadow:0px 0px 5px #000000,
      0px 0px 7px #00FCFF;font-family: Orbitron, Arial;">Grand Theft Auto V</h2>
	<div class="contplay">
		<div class="contgta"> 
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 100%;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" >
					<div class="item active" >
						<img src="multimedia/img/gta1.jpg" alt="Los Angeles" style="width:100%; height: 400px;">
					</div>

					<div class="item" >
						<img src="multimedia/img/gta2.jpg" alt="Chicago" style="width:100%; height: 400px;">
					</div>

					<div class="item" >
						<img src="multimedia/img/gta3.jpg" alt="New york" style="width:100%; height: 400px;">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- fin de coplay -->
	<div class="contventa">
		<label for="">&nbsp;Comprar Grand Theft Auto V</label><br>
		<div class="carrito "> <p>$29.99</p><a href="?p=carrito" class="col-md-2 col-sm-6 col-xs-12"><span class="icon-shopcart"> AÑEDIR AL CARRITO</a></span >
		</div>
	</div>
	<br>
	<div class="cont1">
		<h2><b>ACERCA DE ESTE JUEGO</b></h2>
		<hr>
		<p>
			Asóciate con el empresario Tony Prince para abrir y gestionar un club nocturno en el que pinchan los mejores DJ del mundo (Solomun, Tale Of Us, Dixon y The Black Madonna), y úsalo de tapadera para ocultar la red de organizaciones criminales más densa de San Andreas. 
			<br><br>
			Cuando un joven estafador callejero, un ladrón de bancos retirado y un psicópata aterrador se ven involucrados con lo peor y más desquiciado del mundo criminal, del gobierno de los EE. UU. y de la industria del espectáculo, tendrán que llevar a cabo una serie de peligrosos golpes para sobrevivir en una ciudad implacable en la que no pueden confiar en nadie. Y mucho menos los unos en los otros.
			<br><br>
			Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine con una resolución de 4K y disfrutar del juego a 60 fotogramas por segundo.
			<br><br>
			El juego cuenta con múltiples y variadas opciones de personalización específicas para ordenadores, con más de 25 ajustes configurables distintos para la calidad de las texturas, shader, teselado, antialiasing y muchos otros elementos, además de opciones de personalización del ratón y el teclado. También es posible modificar la densidad de población para controlar el tráfico de vehículos y peatones, y es compatible con dos y tres monitores, 3D y mandos ""plug-and-play"".
			<br><br>
			Grand Theft Auto V para PC también incluye Grand Theft Auto Online, compatible con 30 jugadores y dos espectadores. Grand Theft Auto Online para PC incluirá todas las mejoras y contenidos creados por Rockstar desde la fecha de lanzamiento de Grand Theft Auto Online, incluidos los golpes y los modos Adversario.
			<br><br>
			La versión para PC de Grand Theft Auto V y Grand Theft Auto Online incluye la vista en primera persona, que ofrece a los jugadores la posibilidad de explorar todos los detalles del mundo de Los Santos y el condado de Blaine de una forma totalmente nueva.
			<br><br>
			Grand Theft Auto V para PC también cuenta con el nuevo editor Rockstar, un conjunto de herramientas que permite grabar, editar y compartir vídeos de Grand Theft Auto V y Grand Theft Auto Online de manera rápida y sencilla. Gracias al modo director del editor Rockstar, los jugadores pueden dar vida a sus ideas y crear escenas con personajes del juego, peatones e incluso animales. El editor cuenta con técnicas avanzadas de movimiento de cámara, efectos de edición como imágenes a cámara lenta o rápida, varios filtros de cámara, la posibilidad de añadir canciones de las emisoras de radio de GTA V o controlar de forma dinámica la intensidad de la música del juego. Los vídeos terminados pueden subirse directamente a YouTube y al Social Club de Rockstar Games desde el editor Rockstar para compartirlos de manera sencilla.
			<br><br>
			The Alchemist y Oh No, compositores de la banda sonora, son los locutores de la nueva radio del juego, ""The Lab FM"", que emite canciones nuevas y exclusivas de estos dos artistas inspiradas en la música original del juego. También colaboran otros artistas invitados como Earl Sweatshirt, Freddie Gibbs, Little Dragon, Killer Mike y Sam Herring de Future Islands, por mencionar algunos. Los jugadores también pueden descubrir Los Santos y el condado de Blaine mientras escuchan su propia música en ""Tu radio"", una nueva emisora con una banda sonora creada y personalizada por el jugador.


		</p>
	</div>
	<div class="row cont2">
		<label for="" >&nbsp;REQUISITOS DEL SISTEMA</label>
		<br>
		<div class="col-md-4 col-sm-6 col-xs-12 minino">
			<h2 >&nbsp;REQUISITOS MINIMOS</h2>
			<li>Requiere un procesador y un sistema operativo de 64 bits</li>
			<li>SO: Windows 8.1 de 64 bits, Windows 8 de 64 bits, Windows 7 de 64 bits con Service Pack 1</li>
			<li>Procesador: Intel Core 2 Quad CPU Q6600 a 2,4 GHz (4 CPU)/AMD Phenom 9850 Quad-Core (4 CPU) a 2,5 GHz.</li>
			<li>Memoria: 4 GB de RAM</li>
			<li>Gráficos: NVIDIA 9800 GT 1 GB/AMD HD 4870 1 GB (DX 10, 10.1, 11).</li>
			<li>Almacenamiento: 72 GB de espacio disponible</li>
			<li>Tarjeta de sonido: compatible con DirectX 10.</li><br>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 recomenda">
			<h2>&nbsp;REQUISITOS RECOMENDADOS</h2>
			<li>Requiere un procesador y un sistema operativo de 64 bits</li>
			<li>SO: Windows 8.1 de 64 bits, Windows 8 de 64 bits, Windows 7 de 64 bits con Service Pack 1.</li>
			<li>Procesador: Intel Core i5 3470 a 3,2 GHz (4 CPU)/AMD X8 FX-8350 a 4 GHz (8 CPU).</li>
			<li>Memoria: 8 GB de RAM</li>
			<li>Gráficos: NVIDIA GTX 660 2 GB/AMD HD7870 2 GB.</li>
			<li>Almacenamiento: 72 GB de espacio disponible</li>
			<li>Tarjeta de sonido: compatible con DirectX 10.</li><br>
		</div>
	
	</div>

</div>


<?php
if (!isset($_REQUEST["emp"])) {
	header("Location:../controlador/control.php?m=1");
}
?>
<!DOCTYPE html>
	<html lang="es">
		<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script src="jquery.js"></script>
		<script src="sweetalert2.all.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#del").click(function() {
					Swal.fire({
						type:"warning",
						title:"Esta seguro de eliminar el registro",
						text:"Se eliminara permanentemente",
						showCancelButton:true,
						confirmButtonColor:"green",
						cancelButtonColor:"red"
					}).then((result)=>{
						if (result.value) {
							$("#f").append("<input type='hidden' name='eliminar'>");
							$("#myform").submit();

						}
					});
				});
			});
		</script>
		</head>
		<body>
			<header></header>
			<nav></nav>
			<section>
				<div class="col-md-5">
					<form action="../controlador/control.php" id="myform"><div id="f"></div>
						Id<input type="text" name="id_emp" id="id_emp" class="form-control" readonly="true">
						Nombre<input type="text" name="nombre" id="nombre" class="form-control">
						Departamento<select name="id_dep" id="id_dep" class="form-control"><option></option>
							<?php
							if (isset($_REQUEST["dep"])) {
								$d=json_decode($_REQUEST["dep"]);
								foreach ($d as $v) {
									echo "<option value='$v->id_dep'>$v->nombre</option>";
								}
							}
							?>
						</select><input type="hidden" name="m">
						<br>
						<input type="reset" value="Nuevo" onclick="$('#g').attr('disabled',false)" class="btn btn-success">
						<input type="submit" name="guardar" id="g" disabled="true" class="btn btn-success" value="Guardar">
						<input type="submit" name="modificar" value="Modificar" class="btn btn-success">
						<input type="button" name="eliminar" value="Eliminar" class="btn btn-success" id="del">
					</form>
					<br>
					<table class="table">
						<tr><th>Id</th><th>Nombre</th><th>Id Depto</th><th>Accion</th></tr>
						<?php
						if (isset($_REQUEST["emp"])) {
								$d=json_decode($_REQUEST["emp"]);
								foreach ($d as $v) {
									$nom=str_replace(" ","&nbsp;", $v->nombre);
									echo "<tr><td>$v->id_emp</td><td>$v->nombre</td><td>$v->id_dep</td><td><button class='btn btn-warning' onclick=$('#id_emp').val('$v->id_emp');$('#nombre').val('$nom');$('#id_dep').val('$v->id_dep')>Ver</button></td></tr>";
								}
							}
							if (isset($_REQUEST["res"])) {
								$res=$_REQUEST["res"];
								if ($res!="") {
									echo "<script>Swal.fire('$res','','success')</script>";
								}
							}
						?>
					</table>
				</div>								
			</section>
			<aside></aside>
			<footer></footer>
		</body>
	</html>
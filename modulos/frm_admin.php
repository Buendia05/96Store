<?php
//if (!isset($_REQUEST["emp"])) {
  //header("Location:../configs/control.php?m=1");
//	redir("../configs/control.php?m=1");
require 'daoAdmins.php';
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

?>
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
  <div class="col-md-6">
    <form action="../configs/control.php" id="myform"><div id="f"></div>
      <input type="hidden" name="id_admins" id="id_admins" class="form-control"/>
      Usuario<input type="text" name="name" id="name" class="form-control" required/>
      Contraseña<input type="password" name="password" id="password" class="form-control" required/>
      Confirmar Contraseña<input type="password" name="cpassword" id="cpassword" class="form-control" required/>
      Nombre<input type="text" name="name" id="name" class="form-control" required/>
      Apellido<input type="text" name="apellido" id="apellido" class="form-control" required/>
      Fecha de Nacimiento<input type="date" name="fechaNac" id="fechNac" class="form-control" required/>
      Direccion<input type="text" name="direccion" id="direccion" class="form-control" required/>
      Telefono<input type="text" name="telefono" id="telefono" class="form-control" required/>
      Correo<input type="text" name="correo" id="correo" class="form-control" required/>
      <input type="hidden" name="m">
      <br>
      <input type="reset" value="Nuevo" onclick="$('#g').attr('disabled',false)" class="btn btn-success">
      <input type="submit" name="guardar" id="g" disabled="true" class="btn btn-success" value="Guardar">
      <input type="submit" name="modificar" value="Modificar" class="btn btn-success">
      <input type="button" name="eliminar" value="Eliminar" class="btn btn-success" id="del">
    </form>
    <br>
    <div class="col-md-6">
    <div class="table-responsive">
    <table class="table">
      <tr><th>Id</th><th>Usuario</th><th>Contraseña</th><th>Nombre</th><th>Apellido</th><th>Fecha de Nacimiento</th><th>Direccion</th><th>Telefono</th><th>Correo</th><th>Accion</th></tr>
      <?php
      if (isset($_REQUEST["emp"])) {
          $d=json_decode($_REQUEST["emp"]);
          foreach ($d as $v) {
            $nom=str_replace(" ","&nbsp;", $v->nombre);
            echo "<tr><td>$v->id_admins</td><td>$v->username</td><td>$v->password</td><td>$v->name</td><td>$v->apellido</td><td>$v->fechaNac</td><td>$v->direccion</td><td>$v->telefono</td><td>$v->correo</td><td><button class='btn btn-warning' onclick=$('#id_admins').val('$v->id_admins');$('#username').val('$username');$('#password').val('$password');$('#name').val('$nom');$('#apellido').val('$v->apellido');$('#fechaNac').val('$fechaNac');$('#direccion').val('$direccion');$('#telefono').val('$telefono');$('#correo').val('$correo');>Ver</button></td></tr>";
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
</div>

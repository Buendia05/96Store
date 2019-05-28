<?php
check_user('pagar_compra');
if (isset($subir)) {
  $nombre = clear($nombre);
  if (is_uploaded_file($_FILES['comprobante']['tmp_name'])) {
    $comprobante = date("His").rand(0,1000).".png";
    move_uploaded_file($_FILES['comprobante']['tmb_name'], "comprobantes/".$comprobante)
  }
  $mysqli->query("INSERT into pagos(id_cliente,id_compra,comprobante,nombre,fecha) VALUES ('".$_SESSION['id_cliente']."','$id','$comprobante','$nombre',NOW())");
  alert("Comprobante enviado");
  redir("?=miscompras");
}
?>

<h1>Metodos de pago</h1>
<table>
<tr>
  <th>Tipo de pago</th>
  <th>Cuenta</th>
  <th>Beneficiario</th>
  <th>Acciones</th>
</tr>
<tr>
  <td>Transferencia Bancaria</td>
  <td>0000-0000-0000-0000</td>
  <td>Oscar Flamenco</td>
  <td><a target="_blank" href="https://google.com">Ir al Pago</a></td>
</tr>

</table>
<h1>Envia el comprobante de pago de la compra</h1>
<form method="POST" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label><small>Adjuntar Comprobante</small></label>
    <input type="file" class="form-control" name="comprobante" title="Adjuntar Comprobante" required/>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="nombre" title="Nombre de la persona que transfiere"/>
  </div>
  <div class="form-group">
    <input type="submit" name="subir" class="btn btn-primary" value="Enviar"/>
  </div>
</form>

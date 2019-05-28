<?php
//estados:
//0 sin verificar
//1 verificado
//2 reembolso
if (isset($aceptar)) {
  $mysqli->query("UPDATE pagos SET estado = 1 WHERE id = 'aceptar'");
  $id_compra = clear($id_compra);
  $mysqli->query("UPDATE compra SET estado = 1 WHERE id = '$id_compra'");
  alert("Pago verificado.");
  redir("?p=ver_compra&id=".$id_compra);
}

?>
<h1 style="font-family: 'Orbitron','Arial'; color: #fff;">Pagos Pendientes</h1>
<br>
<table class="table table-striped" style="font-family: 'Orbitron','Arial'; color: black;">
<tr>
  <th>Cliente</th>
  <th>Fecha</th>
  <th>Comprobante</th>
  <th>Nombre de comprobante</th>
  <th>Acciones</th>
  <th>Estado</th>
</tr>
<?php
$s = $mysqli->query("SELECT * FROM pagos ORDER BY fecha DESC");
while ($r=mysqli_fetch_array($s)) {
  ?>
  <tr>
    <td><?=nombre_cliente($r['id_cliente'])?></td>
    <td><?=fecha($r['fecha'])?></td>
    <td><a target="_blank" href="comprobantes/<?=$r['comprobante']?>">Ver Comprobante<i class="fa fa-eye"></i></a></td>
    <td><?=estado_pago($r['estado'])?></td>
    <td>
        <?php
          if ($r['estado']==0) {
        ?>
        <a href="?p=pagos&aceptar=<?=$r['id']?>&id_compra=<?=$r['id']?>" title="Verificar y aceptar pago"><i class="fa fa-check"></i></a>
        <?php
      }
        ?>
        <a href="?p=ver_compra=<?=$r['id_compra']?>"><i class="fa fa-eye" title="Ver Compra"></i></a>
    </td>
  </tr>
  <?php
}

?>
</table>

<h1 style="font-family: 'Orbitron','Arial'; color: #fff;">Pagos de los clientes</h1>
<br>
<table class="table table-striped" style="font-family: 'Orbitron','Arial'; color: black;">
<tr>
  <th>Cliente</th>
  <th>Fecha</th>
  <th>Comprobante</th>
  <th>Nombre de comprobante</th>
  <th>Acciones</th>
  <th>Estado</th>
</tr>
<?php
$s = $mysqli->query("SELECT * FROM pagos ORDER BY fecha DESC");
while ($r=mysqli_fetch_array($s)) {
  ?>
  <tr>
    <td><?=nombre_cliente($r['id_cliente'])?></td>
    <td><?=fecha($r['fecha'])?></td>
    <td><a target="_blank" href="comprobantes/<?=$r['comprobante']?>">Ver Comprobante<i class="fa fa-eye"></i></a></td>
    <td><?=estado_pago($r['estado'])?></td>
    <td>
        <?php
          if ($r['estado']==0) {
        ?>
        <a href="?p=pagos&aceptar=<?=$r['id']?>" title="Verificar y aceptar pago"><i class="fa fa-check"></i></a>
        <?php
      }
        ?>
        <a href="?p=ver_compra=<?=$r['id_compra']?>"><i class="fa fa-eye" title="Ver Compra"></i></a>
    </td>
  </tr>
  <?php
}

?>
</table>

<?php date_default_timezone_set('America/El_Salvador');//seteamos zona horaria
require_once('class.ezpdf.php');//llamamos libreria
$pdf = new Cezpdf('a4',"landscape"); //instacia de la clase, defino papel
$pdf->selectFont('fonts/Helvetica.afm');//setemos la fuente
$pdf->ezSetCmMargins(1,1,1.5,1.5); //seteamos margenes
$conexion = new mysqli('127.0.0.1','root','','tienda');//conexion a BD
$datos = $conexion->query("select productos_compra.id_productos_compra, productos.name as Producto, productos_compra.cantidad as Cantidad, productos_compra.cantidad*productos_compra.monto as Monto from productos_compra inner join productos on productos_compra.id_productos=productos.id_productos inner join compra on productos_compra.id_compra=compra.id_compra");//seleccionamos la tabla a mostrar
while($fila = mysqli_fetch_assoc($datos)) { //recorrer tabla y extraer filas
    $data[] = array_merge($fila);//formamos arreglo
}
$titles = array(//formo arreglo con titulon de columna
'id_productos_compra'=>'<b>Id de Ventas</b>',
'Producto'=>'<b>Producto</b>',
'Cantidad'=>'<b>Cantidad</b>',
'Monto'=>'<b>Monto</b>',
);
$txttit = "<b>Reporte de Ventas</b>\n";
$pdf->ezText($txttit, 12);//imprime texto
$options = array(
'shadeCol'=>array(0.9,2,0.9,0.5),//color de filas de tabla
'xOrientation'=>'center',//orientacion de tabla
'width'=>500//ancho de tabla
);
$pdf->ezTable($data,$titles,'Ventas', $options);
$pdf->ezText("\n\n\n", 24);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>

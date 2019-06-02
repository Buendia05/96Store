<?php date_default_timezone_set('America/El_Salvador');//seteamos zona horaria
require_once('class.ezpdf.php');//llamamos libreria
$pdf = new Cezpdf('a4',"landscape"); //instacia de la clase, defino papel
$pdf->selectFont('fonts/Helvetica.afm');//setemos la fuente
$pdf->ezSetCmMargins(1,1,1.5,1.5); //seteamos margenes
$conexion = new mysqli('127.0.0.1','root','','tienda');//conexion a BD
$datos = $conexion->query("select * from clientes");//seleccionamos la tabla a mostrar
while($fila = mysqli_fetch_assoc($datos)) { //recorrer tabla y extraer filas
    $data[] = array_merge($fila);//formamos arreglo
}

$titles = array(//formo arreglo con titulon de columna
'id_clientes'=>'<b>Id de Cliente</b>',
'name'=>'<b>Nombre</b>',
'username'=>'<b>Username</b>',
'password'=>'<b>Password</b>',
);
$txttit = "<b>Clientes</b>\n";
$pdf->ezText($txttit, 12);//imprime texto
$options = array(
'shadeCol'=>array(0.9,2,0.9,0.5),//color de filas de tabla
'xOrientation'=>'center',//orientacion de tabla
'width'=>500//ancho de tabla
);
$pdf->ezTable($data,$titles,'Clientes', $options);
$pdf->ezText("\n\n\n", 24);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>

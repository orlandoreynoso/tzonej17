<?php 

echo '<div class="cuadro_comentarios">';

$DB_HOST = "localhost"; 
$DB_USERNAME = "viaje_user01"; 
$DB_PASSWORD = "db1682travel"; 
$DB_NAME = "viaje_travel01"; 


$con = mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD); 
mysql_select_db($DB_NAME, $con); 
 

//require('../contenidos/conexion.php');


// El mensaje
// $nombre=htmlentities($_POST['nombre']);
//  $variable=utf8_encode($_POST['variable']);

$from = $_POST['origen'];
//$textoFrom = $_POST['torigen'];
$subject = $_POST['subject'];
$recipient = $_POST['recipient'];
$redirect = $_POST['redirect'];
$destinatario = $_POST['email'];
$pagina = $_GET['pagina'];

//............. Inicia la actulizacion ...................

   $email_coment = $_POST['email'];
   $nombre_coment = '';
   $apellido_coment = '';   
//   $fecha_coment = date('Y-m-d');
   $fecha_coment = date("Y-m-d H:i:s");


if(isset($_POST['email']) && !empty($_POST['email'])) {
	
$consulta1 = "INSERT INTO tr_boletin (nombre,apellido,correo,fecha) VALUES ('$nombre_coment','$apellido_coment','$email_coment','$fecha_coment')"; 

		mysql_query($consulta1) or die ("problema con query");

		//muestra los datos consultados
echo "<p>----------------------------------------</p>";		
echo "<p>Datos ingresados a la base de datos</p>";
echo "<p>----------------------------------------</p>";

//............... fin de la actulizacion
$mensaje ="";
$mat = $_POST;

$encabezado = '
<html>
<body>
<p align=left>Hemos recibido sus datos exitosamente. Este correo es una respuesta
automatica que Ud. recibe al llenar el :' . $subject . '</p>';

$cuerpo = '
<table cellspading=0 cellspacing=1 align=center>
<th>Datos</th>
<th>Parametro</th>';

foreach($mat as $i=>$valor) {  
  //if (($i!='recipient') and ($i!='subject') and ($i!='redirect')){
  $cuerpo = $cuerpo . '<tr><td>' . $i . '</font></td><td>' . $mat[$i] . '</font><td></tr>';
  // } 
  }


$pie = '
</table>
<p align=left>Puede comunicarse con nosotros al e-mail: ' . $recipient . ', Gracias por su comentario.</p></body></html>';

$mensaje = $encabezado . $pie;
$mensaje2 = 'Informacion del Usuario:' . $cuerpo;


// En caso de que cualquier linea tenga mas de 70 caracteres, habria
// que usar wordwrap()
$mensaje = wordwrap($mensaje, 70);
// Para enviar correo HTML, la cabecera Content-type debe definirse

$cabeceras = 'Return-path: <' . $from . ">\r\n";
$cabeceras .= 'From: ' . $from . "\r\n";
$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


//header('Content-Type: text/html; charset=UTF-8');  
$correines = $recipient .', info@orlandoreynoso.com';
// Enviar
if (mail($correines, $subject, $mensaje2, $cabeceras))
  { 
 echo '<p class="txtmail2"><strong>&nbsp;</strong></p>';
  //echo "Mail 1 Enviado Correctamente a " . $recipient;
  }
else
  { echo "No se puede enviar el mail a: " . $correines; }
  
if (mail($destinatario,$subject, $mensaje, $cabeceras))
  {

 echo '<p class="txtmail2"><strong>Datos Recibidos con Exito!!!</strong></p>';
  //echo "Mail 2 Enviado Correctamente a " . $destinatario; 
  }
else
  { echo "No se puede enviar el mail a " . $destinatario; }



$variable = '
<p id="estilo_comentario5">&nbsp;</p>
<p>&nbsp;</p>

';

echo $variable;

echo "<p> FIN DEL FORMULARIO </p>";


}

else {

echo "<p>----------------------------------------</p>";		
echo "Error, no ha introducido todos los datos";
echo "<p>----------------------------------------</p>";
	

}



echo '<h1 id="estilo_comentario4">&nbsp;</h1>';

echo '</div>';

?>


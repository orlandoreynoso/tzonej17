<?php 

/*
Template Name: suscripcion
 */

 get_header();


?>



<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->

  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>  

      <div style="clear: both"></div>  

<section id="block02">
      <div style="clear: both"></div>
    <div class="col-2-3">
     <div class="mapeo">
          <!-- Breadcrumb -->
          <?php the_breadcrumb(); ?>
          <!-- Fin Breadcrumb -->
     </div> 

      <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->
    
    <div class="contenido-cartelera">
      
        <div id="compartir">    
        <p>Compartir  &raquo; </p>          
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4def925768ffe7cc"></script>
        <!-- AddThis Button END -->
        </div> 

        <div class="clearing"></div>


          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          // End the loop.
          endwhile;
          ?>

         <?php  the_content(); ?> 

        <div class="clearing"></div>

<!-- ******************************************************** -->

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


      $primero  = '
      <html>
      <body>
      <div cellspacing=0  width="600"  style="
      background-color:#e9e9e9; 
      border:1px solid #ffcc00; 
      padding:7px 7px 7px 7px;  
      text-align: left;
      border:1px solid red;
      min-width: 200px;
      min-height: 335px;
      display: inline-block;
      margin: 0 4px 0 0;
      padding: 10px 10px 10px 10px;
      border-bottom: 3px solid #7fa500;
      border-left: 1px solid #21a734;
      border-right: 1px solid #21a734;
      border-top: 1px solid #21a734;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px; 
      overflow: hidden;">
      <p align=left></p>
      <div class="cliente_cuadro">
      ';

      $segundo =  '
            </div>
            </div>
            </body></html>';


$encabezado = '
      <html>
      <body>
      <div cellspacing=0  width="600"  style="
      background-color:#e9e9e9; 
      border:1px solid #ffcc00; 
      padding:7px 7px 7px 7px;  
      text-align: left;
      border:1px solid red;
      min-width: 200px;
      min-height: 335px;
      display: inline-block;
      margin: 0 4px 0 0;
      padding: 10px 10px 10px 10px;
      border-bottom: 3px solid #7fa500;
      border-left: 1px solid #21a734;
      border-right: 1px solid #21a734;
      border-top: 1px solid #21a734;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px; 
      overflow: hidden;">
      <p align=left></p>
      <div class="cliente_cuadro">
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
<p align=left>Puede comunicarse con nosotros al e-mail: ' . $recipient . ', Gracias por su comentario.</p>
            </div>
            </div>
            </body></html>';

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


/*===================================*/



/*===================================*/

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



<!-- ******************************************************** -->
        <div class="clearing"></div>

         <div class="division-home"><p>&nbsp;</p></div>        
  

        <div class="clearing"></div>

    </div>


    </div>


     <div class="col-1-5">

           <div class="cuadro-paquetes2">
      <h1><!-- SUSCRIBETE --></h1>     
      <div class="cuadro-paquetes2-contenido">
       <P>Recibe ofertas, promociones y mucho más.</P>
        <?php    dynamic_sidebar('suscripcion');         ?>           
      </div>           
       
       
    </div>


  <div class="divpagos">
    <h1>OPCIONES DE PAGO</h1>
    <div class="divpagos-contenido  "><?php   dynamic_sidebar('opciones-de-pago'); ?></div>  
  </div>

              <div class="titulo-cartelera"><h2>Últimas actualizaciones</h2></div>
              <div class="lateral">
                <?php  if (is_page(4)) {   dynamic_sidebar('ultimas-actualizaciones');   }       ?>
              </div>  

                <div class="redes">
                  <iframe class="face_cocos"  src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FTravel-Zone%2F122124437856110&amp;width=440&amp;colorscheme=light&amp;show_faces=false&amp;stream=true&amp;header=false&amp;height=395" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:440px; height:395px;" allowTransparency="true"></iframe>                                  
                </div>           

      </div>     


      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->
  

<?php 

/*   if (is_page(7)) {*/
     get_footer();
/*   }*/

?>
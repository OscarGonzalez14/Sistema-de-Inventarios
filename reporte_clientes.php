
<?php

  require_once("class/config.php"); 

  if(isset($_SESSION["backend_id"])){

require_once("class/clientesModulo.php");
require_once("class/configuracionModulo.php");

$clientes=new Clientes();

$informacion_empresa=new Configuracion();


$datos=$clientes->get_clientes();

$datos_empresa=$informacion_empresa->get_configuracion();

ob_start(); 

   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico">
<link type="text/css" rel="stylesheet" href="<?php echo Conectar::ruta();?>public/dompdf/css/print_static.css"/>
<style type="text/css">

.Estilo7 {font-size: 12px}
.Estilo8 {
  font-size: 10px;
  font-weight: bold;
}
.Estilo9 {font-size: 10px}
.Estilo10 {font-size: 9px; font-weight: bold; }
.Estilo11 {color: #FFFFFF}

</style>
</head>
<table style="width: 100%;" class="header">
<tr>
<td width="54%" height="111"><h1 style="text-align: left; margin-right:20px;"><img src="public/images/logoAE.jpeg" width="200" height="109"  /></h1></td>
<td width="46%"><table style="width: 100%; font-size: 8pt;">
  <tr>
    <td><strong>NOMBRE EMPRESA: </strong> <?php echo $datos_empresa[0]["nombre_emp"]; ?></td>
  </tr>
  <tr>
    <td><strong>DIRECCION: </strong> <?php echo $datos_empresa[0]["direccion_emp"]; ?></td>
  </tr>

  <tr>
    <td><strong>TELEFONO: </strong><?php echo $datos_empresa[0]["telefono"]; ?></td>
  </tr>
  <tr>
    <td><strong>NIT: </strong><?php echo  $datos_empresa[0]["nit"]; ?></td>
  </tr>
  <tr>
    <td><strong>FECHA-HORA IMPRESO: </strong>
      <?php echo $fecha=date("d-m-Y h:i:s A"); ?></td>
  </tr>
  <tr></tr>
</td>
</table>
</tr>
</table>


  <div style="font-size: 7pt">
<table width="100%" class="change_order_items">
<tbody>
<tr>
  <th colspan="6">LISTADO GENERAL DE CLIENTES </th>
  </tr>
<tr>
<th width="5%" bgcolor="#317eac"><span class="Estilo11">ID</span></th>
<th width="20%" bgcolor="#317eac"><span class="Estilo11">NOMBRE</span></th>
<th width="10%" bgcolor="#317eac"><span class="Estilo11">TELEFONO</span></th>
<th width="20%" bgcolor="#317eac"><span class="Estilo11">DIRECCION</span></th>
<th width="7%" bgcolor="#317eac"><span class="Estilo11">CORREO</span></th>
<th width="20%" bgcolor="#317eac"><span class="Estilo11">FECHA</span></th>

</tr>
<?php
for($i=0;$i<sizeof($datos);$i++) {
  ?>
<tr>
<td><div align="center"><span class="Estilo3"><?php echo $datos[$i]['id_cliente']; ?></span></div></td>
<td><div align="lefts"><span class="Estilo3"><?php echo $datos[$i]['nombre_cli']; ?></span></div></td>
<td style="text-align: center"><div align="center"><span><?php echo $datos[$i]['telefono_cli']; ?></span></div></td>
<td style="text-align: left"><div align="center"><span><?php echo $datos[$i]['direccion_cli']; ?></span></div></td>
<td style="text-align: center"><div align="center"><span><?php echo $datos[$i]['correo_cli']; ?></span></div></td>
<td style="text-align: left"><div align="center"><span><?php echo $datos[$i]['fecha_cli']; ?></span></div></td>

</tr>
<?php } ?>
</tbody>

</table>

<table style="border-top: 1px solid black; padding-top: 2em; margin-top: 2em;">
  <tr>
    <td style="padding-top: 0em"><span class="Estilo9"><strong>REVISADO POR : _____________________________________________________________________________________________________</strong></span></td>
    <td style="text-align: center; padding-top: 0em;">&nbsp;</td>
  </tr>
 <br>
  <br>
   <br>

  <tr>
    <td style="padding-top: 0em"><span class="Estilo8">REALIZADO EL DIA <?php echo date("d")?> DE <?php echo Conectar::convertir(date('m'))?> DEL <?php echo date("Y")?></span></td>
    <td style="text-align: center; padding-top: 0em;">&nbsp;</td>
  </tr>
</table>

</div>



  <?php
  
  $salida_html = ob_get_contents();
  ob_end_clean(); 

    require_once("public/dompdf/dompdf_config.inc.php");       
    $dompdf = new DOMPDF();
    $dompdf->load_html($salida_html);
    $dompdf->render();
    $dompdf->stream("Listado de Clientes.pdf", array('Attachment'=>'0'));


  } else{

     require_once("index.php");
  }
    
?>
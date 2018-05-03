<?php 
   
   require_once("class/config.php");
   
   if(isset($_SESSION["backend_id"])){ 

   	require_once("class/configuracionModulo.php");

   	$config= new Configuracion();

   	$datos=$config->get_configuracion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Configuracion</title>
	<?php require_once("head.php");?>
	<?php require_once("header_css_tabla.php");?>
</head>
<body>

	<div class="container-fluid"><!--div1-->

		<?php require_once("menu_principal.php"); ?>

		<div  class="container-fluid"><!--div2-->
			
			<div class="row"><!--divrow-->

				<div class="col-sm-2">

					<?php require_once("menu_lateral.php"); ?>
					
				</div>

				<div class="col-sm-8">

					<div class="panel-configuracion">

					<ol class="breadcrumb">
					   <li><a href="<?php echo Conectar::ruta();?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
					 <li><a href="<?php echo Conectar::ruta();?>configuracion.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Configuración</a></li>
					<li><a href="<?php echo Conectar::ruta();?>agregar_configuracion.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Agregar Configuración</a></li>
					</ol>
						
					</div>

					<div class="panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Formulario de configuración</h3>
						</div>

						<div class=panel-body>

							<table  class="table table-bordered" id="myTable" border="2">

							<thead>
								<tr>
									<td>id</td>
									<td>Nombre</td>
									<td>Direccion</td>
									<td>Telefono</td>
									<td>Descripcion</td>
									<td>NIT</td>
									<!--<td>Acciones</td>-->
								</tr>
							</thead>

							<tbody>
							<?php for($i=0;$i<sizeof($datos);$i++){?>
								<tr>
									<td><?php echo $datos[$i]["id"]; ?></td>
									<td><?php echo $datos[$i]["nombre_emp"]; ?></td>
									<td><?php echo $datos[$i]["direccion_emp"]; ?></td>
									<td><?php echo $datos[$i]["telefono"]; ?></td>
									<td><?php echo $datos[$i]["descripcion"]; ?></td>
									<td><?php echo $datos[$i]["nit"]; ?></td>
								</tr>
								<?php } ?>
							</tbody>

								
							</table>
						</div>

					</div>
					
				</div>
				
			</div><!--divrow-->
			
		</div><!--div2-->
		
	</div><!--div1-->



	<?php require_once("footer_js_tabla.php");?>
	<?php require_once("footer.php");?>
</body>
</html>

<?php
 
 } else {

 	 header("Location:".Conectar::ruta()."index.php");
 }
 ?>
<?php 
require_once("class/config.php");

if(isset($_SESSION["backend_id"])){

	require_once("class/clientesModulo.php");

	$clientes= new Clientes();

	$datos=$clientes->get_clientes();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<?php require_once("head.php");?>
	<?php require_once("header_css_tabla.php");?>
</head>
<body>

<div class="container-fuid">

	<?php require_once("menu_principal.php"); ?>
	<div class="container-fuid">
		<div class="row">
			
			<div class="col-sm-2">
				<?php require_once("menu_lateral.php");?>
			</div>

			<div class="col-sm-10">

			<div class="panel-cliente">

				<ol class="breadcrumb">
					  <li><a href="<?php echo Conectar::ruta();?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
					  <li><a href="<?php echo Conectar::ruta();?>clientes.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clientes</a></li>
					  <li><a href="<?php echo Conectar::ruta();?>agregar_cliente.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Cliente</a></li>
					  <li><a href="reporte_clientes.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Reporte Clientes</a></li>
				</ol>
				
			</div><!--Container-cliente-->

				<div class="panel panel-info">

					<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Listado General de clientes</h3>
						
					</div>

					<div class="panel-body">

					<table class="table table-bordered" id="myTable">

						<thead>
							<th>id</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Correo</th>
							<th>Fecha Creación</th>
							<th>Acciones</th>
						</thead>

						<tbody>
							<?php for ($i=0; $i<sizeof($datos); $i++) {?>
							<tr>
								<td><?php echo $datos[$i]["id_cliente"]?></td>
								<td><?php echo $datos[$i]["nombre_cli"]?></td>
								<td><?php echo $datos[$i]["telefono_cli"]?></td>
								<td><?php echo $datos[$i]["direccion_cli"]?></td>
								<td><?php echo $datos[$i]["correo_cli"]?></td>
								<td><?php echo Conectar::invierte_fecha($datos[$i]["fecha_cli"])?></td>
								<td><center><a class="btn btn-success" href="<?php echo Conectar::ruta();?>editar_cliente.php?id_cliente=<?php echo $datos[$i]["id_cliente"];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>  <a class="btn btn-danger" href="<?php echo Conectar::ruta();?>eliminar_cliente.php?id_cliente=<?php echo $datos[$i]["id_cliente"];?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a></center></td>
							</tr>
							<?php }?>
						</tbody>


						
					</table>
						
					</div>
					
				</div><!--Panel Default-->
				
			</div><!--Container-col-sm-8-->

		</div><!--Container-row-->
		
	</div><!--Container-fluid-->
</div>	
	

	<?php require_once("footer_js_tabla.php");?>
	<?php require_once("footer.php"); ?>

</body>
</html>

<?php

}else{

	header("Location:".Conectar::ruta()."index.php");

	
}
?>
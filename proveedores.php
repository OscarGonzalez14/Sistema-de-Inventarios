<?php
	require_once("class/config.php");
	if(isset($_SESSION["backend_id"])){

		require_once("class/proveedoresModulo.php");

		$proveedor= new Proveedores();
		$datos=$proveedor->get_proveedores();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proveedores</title>

	<?php require_once("head.php");?>

	<?php require_once("header_css_tabla.php"); ?>
</head>
<body>
	<div class="container-fluid">
		
		<?php require_once("menu_principal.php");?>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2">
					<?php require_once("menu_lateral.php");?>
				</div>

				<div class="col-sm-10">
					<div class="panel-proveedor">
				<ol class="breadcrumb">
					  <li><a href="<?php echo Conectar::ruta();?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
					  <li><a href="<?php echo Conectar::ruta();?>proveedores.php"><span class="glyphicon glyphicon-import" aria-hidden="true"></span> Proveedores</a></li>
					  <li><a href="<?php echo Conectar::ruta();?>agregar_proveedor.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Proveedor</a></li>
					  <li><a href="pedidos.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedidos</a></li>
					  <li><a href="agregar_pedidos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> agregar Pedido</a></li>
					  <li><a href="reporte_pedidos.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Reporte Pedidos</a></li>
					  <li><a href="reporte_proveedores.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Reporte Proveedores</a></li>
				</ol>
				</div>

				<div class="panel panel-primary">

					<div class="panel-heading">
						<h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Listado General de Proveedores</h3>						
					</div>

					<div class="panel-body">

						<table class="table table-bordered" id="myTable">
						<thead>
						<tr>	
							<th>id</th>
							<th>Proveedor</th>
							<th>Telefono</th>
							<th>Correo</th>
							<th>Contacto</th>
							<th>Acciones</th>
						</tr
						</thead>


							
						<tbody>
						<?php for($i=0;$i<sizeof($datos);$i++){?>
						<tr>	
							<th><?php echo $datos[$i]["idProveedor"]; ?></th>
							<th><?php echo $datos[$i]["nombreProveedor"]; ?></th>
							<th><?php echo $datos[$i]["telefonoProveedor"]; ?></th>
							<th><?php echo $datos[$i]["correo"]; ?></th>
							<th><?php echo $datos[$i]["nom_contacto"]; ?></th>
							<td><a class="btn btn-success" href="<?php echo Conectar::ruta();?>editar_proveedor.php?id_proveedor=<?php echo $datos[$i]["idProveedor"];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a> <a class="btn btn-danger" href="<?php echo Conectar::ruta();?>eliminar_proveedor.php?id_proveedor=<?php echo $datos[$i]["idPsroveedor"];?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a></td>

						</tr>
						<?php }?>
						</tbody>

				</table>
					</div>
					
				</div>

			</div>
			</div><!--conteiner row-->
		</div><!--conteiner fluid-->

	</div><!--conteiner fluid-->

	<?php require_once("footer_js_tabla.php");?>

	<?php require_once("footer.php");?>

</body>
</html>
<?php } else{

	header("Location:".Conectar::ruta()."index.php");
	}?>


<?php 
 require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){

  	require_once("class/proveedoresModulo.php");

    $proveedor= new Proveedores();

    $datos=$proveedor->get_proveedor_por_id($_GET["id_proveedor"]);
  
  if(isset($_POST["grabar"]) and $_POST["grabar"]=="si") {

    $proveedor->editar_proveedor();
    exit();

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Proveedor</title>

	<?php require_once("head.php");?>
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
					

		  			<?php if(isset($_GET["m"])){

                        switch($_GET["m"]){

                        	case "1";
                        	?>
				<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>¡Atencion!</strong> Existen campos vacios.
				  <a  msj1="tooltip" title="Pueda que exista un campo en blanco" align="right" href="#" class="alert-link"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda</a>
				</div>
                        	<?php
                        	break;

                        	case "2";
                        	?>
						<div class="alert alert-success alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>¡Atencion!</strong> Se ha editado el Proveedor exitosamente.
						  <a  msj1="tooltip" title="Presione 'x' para cerrar este mensaje" align="right" href="#" class="alert-link"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Ayuda</a>
						</div>
                        	<?php
                        	break;
                        }


		  			}?>

					<div class="panel panel-primary">

						<div class="panel-heading">
							<h3 class="panel-title">Editar Proveedor</h3>
						</div>

						<div class="panel-body">

							<form action="" method="post" class="form-horizontal">

								<div class="form-group">
									<label for="" class="control-label col-sm-2">Nombre Proveedor</label>
									<div class="col-sm-6">
										<input type="text" name="nombreProveedor" class="form-control" placeholder="Escriba el Nombre del Proveedor" value="<?php echo $datos[0]["nombreProveedor"]; ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="control-label col-sm-2">TelefonoProveedor</label>
									<div class="col-sm-6">
										<input type="text" name="telefonoProveedor" class="form-control" placeholder="Escriba el telefono del Proveedor" value="<?php echo $datos[0]["telefonoProveedor"]; ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="control-label col-sm-2">Correo</label>
									<div class="col-sm-6">
										<input type="text" name="correo" class="form-control" placeholder="Escriba el Correo del Proveedor" value="<?php echo $datos[0]["correo"]; ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="control-label col-sm-2">Contacto</label>
									<div class="col-sm-6">
										<input type="text" name="nom_contacto" class="form-control" placeholder="Escriba el Nombre del Contacto" value="<?php echo $datos[0]["nom_contacto"]; ?>">
									</div>
								</div>

							<input type="hidden" name="grabar" value="si">

							<input type="hidden" name="id" value="<?php echo $_GET["id_proveedor"];?>">

                            <button class="btn btn-primary col-sm-offset-2">EDITAR</button>
							</form>
							
						</div>
						
					</div>

				</div>


			</div><!--row-->
			
		</div><!--container fluid-->

	</div><!--container fluid principal-->
</body>
</html>

<?php } else {

	header("Location:".Conectar::ruta()."index.php");

	}?>
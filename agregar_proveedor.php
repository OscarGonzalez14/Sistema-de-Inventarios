<?php 

 require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){
  
  if(isset($_POST["grabar"]) and $_POST["grabar"]=="si") {

    require_once("class/proveedoresModulo.php");

    $proveedor= new Proveedores();

    $proveedor->agregar_proveedor();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>agregar Proveedor</title>

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
                        	<h2>se ha agregado el proveedor</h2>
                        	<?php
                        	break;
                        }


		  			}?>

					<div class="panel panel-primary">

						<div class="panel-heading">
							<h3 class="panel-title">Agregar Proveedor</h3>
						</div>

						<div class="panel-body">

							<form action="" method="post" class="form-horizontal">

								<div class="form-group">
									<label for="" class="control-label col-sm-2">Nombre Proveedor</label>
									<div class="col-sm-6">
										<input type="text" name="nombreProveedor" class="form-control" placeholder="Escriba el Nombre del Proveedor">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="control-label col-sm-2">TelefonoProveedor</label>
									<div class="col-sm-6">
										<input type="text" name="telefonoProveedor" class="form-control" placeholder="Escriba el telefono del Proveedor">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="control-label col-sm-2">Correo</label>
									<div class="col-sm-6">
										<input type="text" name="correo" class="form-control" placeholder="Escriba el Correo del Proveedor">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="control-label col-sm-2">Contacto</label>
									<div class="col-sm-6">
										<input type="text" name="nom_contacto" class="form-control" placeholder="Escriba el Nombre del Contacto">
									</div>
								</div>

							<input type="hidden" name="grabar" value="si">
                            <button class="btn btn-primary col-sm-offset-2">REGISTRAR</button>
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
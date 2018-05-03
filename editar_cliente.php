<?php

 require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){

    if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){

       require_once("class/clientesModulo.php");

       $usuario=new Clientes();

       $usuario->agregar_cliente();
       exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Cliente</title>
	<?php require_once("head.php"); ?>


</head>
<body>
	<div class="container-fluid"><!--fluid1-->
		<?php require_once("menu_principal.php"); ?>

		<div class="container-fluid"><!--fluid2-->
			<div class="row">
				<div class="col-sm-2">
					<?php require_once("menu_lateral.php"); ?>
				</div>

				<div class="col-sm-8">

				<div class="panel-cliente">
					<ul class="breadcrumb">
					  <li><a href="<?php echo Conectar::ruta(); ?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
					  <li><a href="<?php echo Conectar::ruta(); ?>clientes.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clientes</a></li>
					  <li><a href="reporte_clientes.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Reporte Clientes</a></li>
					  <li>Crear Clientes</li>
					</ul>
				</div><!--Fin del Breadcrumb-->

					<?php 

                       if(isset($_GET["m"])){
                         
                         switch($_GET["m"]){

                           case "1";
                           ?>
                           <h4>Los campos estan vacios</h4>
                           <?php
                           break;

                           case "2";
                           ?>
                           <h4>El Cliente se ha agregado Exitosamente</h4>
                           <?php
                           break;
                         }
                       }
					?>

	<div class="panel panel-primary">

		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong>Agregar Clientes</strong> </h3>
		</div>				
			<div class="panel-body">	
				<form action="" method="post" class="form-horizontal">

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-6">
							<input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre de cliente"/>
						</div>
					</div>

				    <div class="form-group">
						<label for="" class="col-sm-2 control-label">Telefono</label>
						<div class="col-sm-6">
							<input type="text" name="telefono" class="form-control" placeholder="Ingrese telefono de cliente"/>
						</div>
					</div>	


					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Dirección</label>
						<div class="col-sm-8">
							<input type="text" name="direccion" class="form-control" placeholder="Ingrese la direccion del cliente"/>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Correo</label>
						<div class="col-sm-6">
							<input type="text" name="correo" class="form-control" placeholder="Ingrese correo del cliente"/>
						</div>
					</div>




							<input type="hidden" name="grabar" value="si">
                            <button class="btn btn-primary col-sm-offset-2">REGISTRAR</button>
			</div><!--pane body-->		
					
				</form><!--fin formulario-->			


					
				</div>
			</div><!--row-->
		</div><!--fluid2-->
	</div><!--fluid1-->
	</div>

	<?php require_once("footer.php");?>
</body>
</html>

<?php } else {

	header("Location:".Conectar::ruta()."index.php");

	}?>
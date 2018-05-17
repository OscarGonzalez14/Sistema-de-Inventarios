<?php

 require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){

    if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){

       require_once("class/userModulo.php");

       $usuario=new Usuarios();

       $usuario->agregar_usuario();
       exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Usuario</title>
	<?php require_once("head.php"); ?>

	<script>
		function validar(){
		valor = document.getElementById("dui").value;
		if( !(/^\d{8}-\d{1}$/.test(valor)) ) {
 		return false;
}
}
	</script>


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

				<div class="panel-usuario">
					<ul class="breadcrumb">
					  <li><a href="<?php echo Conectar::ruta(); ?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
					  <li><a href="<?php echo Conectar::ruta(); ?>usuarios.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</a></li>
					  <li>Crear Usuario</li>
					</ul>
				</div><!--Fin del Breadcrumb-->

					<?php 

                       if(isset($_GET["m"])){
                         
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
  <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
</div>
                           <?php
                           break;
                         }
                       }
					?>

	<div class="panel panel-primary">

		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Agregar Usuarios </h3>
		</div>			
			<div class="panel-body">	
				<form action="" method="post" class="form-horizontal">

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">DUI</label>
						<div class="col-sm-4">
							<input type="text" name="dui" class="form-control" placeholder="Ingrese su DUI" onsubmit="return validar()"/>
						</div>
					</div>

				    <div class="form-group">
						<label for="" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-6">
							<input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre"/>
						</div>
					</div>	


					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Cargo</label>
						<div class="col-sm-6">
							<input type="text" name="cargo" class="form-control" placeholder="Ingrese el cargo"/>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Usuario</label>
						<div class="col-sm-6">
							<input type="text" name="usuario" class="form-control" placeholder="Ingrese elnombre de usuario"/>
						</div>
					</div>

					<!--<div class="form-group">
						<label for="" class="col-sm-2 control-label">Nivel</label>
						<div class="col-sm-6">
							<input type="text" name="nivel" class="form-control" placeholder="Ingrese el nivel de usuario"/>
						</div>
					</div>-->

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Contraseña</label>
						<div class="col-sm-6">
							<input type="text" name="password" class="form-control" placeholder="Ingrese la contraseña de usuario"/>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Repita Contraseña</label>
						<div class="col-sm-6">
							<input type="text" name="password2" class="form-control" placeholder="Repita la contraseña de usuario"/>
						</div>
					</div>

					<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nivel Acceso</label>
							<div class="col-sm-6">
								
								<select name="nivel" class="form-control" id="">

									<option value="0">SELECCIONE</option>
									<option value="ADMINISTRADOR">ADMINISTRADOR</option>
									<option value="BODEGUERO">BODEGUERO</option>
									<option value="CONTADOR">CONTADOR</option>
									      
								</select>
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
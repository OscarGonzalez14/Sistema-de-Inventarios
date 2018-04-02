<?php

 require_once("class/config.php");

  if(isset($_SESSION["backend_id"])){
     
     require_once("class/userModulo.php");
   
   	$usuario=new Usuarios();

    $datos= $usuario->get_usuario_por_id($_GET["id_usuario"]);

    if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
       
       $usuario->editar_usuario();
       exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
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

				<div class="panel-usuario">
					<ul class="breadcrumb">
					  <li><a href="<?php echo Conectar::ruta(); ?>home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Principal</a></li>
					  <li><a href="<?php echo Conectar::ruta(); ?>usuarios.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Usuarios</a></li>
					  <li>Editar Usuario</li>
					</ul>
				</div><!--Fin del Breadcrumb-->

					<?php 

                       if(isset($_GET["m"])){
                         
                         switch($_GET["m"]){

                           case "1";
                           ?>
                           <h2>Los campos estan vacios</h2>
                           <?php
                           break;

                           case "2";
                           ?>
                           <h2>el usuario se ha editado</h2>
                           <?php
                           break;
                         }
                       }
					?>
					
	<div class="panel panel-primary">

			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar Usuario</h3>
			</div>


			<div class="panel-body">	
				<form action="" method="post" class="form-horizontal">

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">DUI</label>
						<div class="col-sm-4">
							<input type="text" name="dui" class="form-control" placeholder="Ingrese su DUI" value="<?php echo $datos[0]["dui"];?>"/>
						</div>
					</div>

				    <div class="form-group">
						<label for="" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-6">
							<input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" value="<?php echo $datos[0]["nombre"];?>"/>
						</div>
					</div>	


					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Cargo</label>
						<div class="col-sm-6">
							<input type="text" name="cargo" class="form-control" placeholder="Ingrese el cargo" value="<?php echo $datos[0]["cargo"];?>"/>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Usuario</label>
						<div class="col-sm-6">
							<input type="text" name="usuario" class="form-control" placeholder="Ingrese elnombre de usuario" value="<?php echo $datos[0]["usuario"];?>"/>
						</div>
					</div>


					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Contraseña</label>
						<div class="col-sm-6">
							<input type="text" name="password" class="form-control" placeholder="Ingrese la contraseña de usuario" value="<?php echo $datos[0]["password"];?>"/>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Repita Contraseña</label>
						<div class="col-sm-6">
							<input type="text" name="password2" class="form-control" placeholder="Repita la contraseña de usuario" value="<?php echo $datos[0]["password2"];?>"/>
						</div>
					</div>

					<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nivel Acceso</label>
							<div class="col-sm-6">
								
								<select name="nivel" class="form-control" id="">

									<option value="0">SELECCIONE</option>
									<option value="ADMINISTRADOR"<?php if($datos[0]["nivel"]=='ADMINISTRADOR'){
										echo "selected='selected'";
									} ?>>ADMINISTRADOR</option>
									<option value="BODEGUERO" <?php if($datos[0]["nivel"]=='BODEGUERO'){
										echo "selected='selected'";
									} ?>>BODEGUERO</option>

									<option value="CONTADOR" <?php if($datos[0]["nivel"]=='CONTADOR'){
										echo "selected='selected'";
									} ?>>CONTADOR</option>
									
								</select>
							</div>
					 </div>

 							<input type="hidden" name="grabar" value="si">
 							<input type="hidden" name="id" value="<?php echo $datos[0]["id"];?>">
                            <button class="btn btn-success col-sm-offset-2">EDITAR</button>
	
					
				</form><!--fin formulario-->
							</div><!--pane body-->				


					
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
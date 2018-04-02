<?php

require_once("class/config.php");

if (isset($_SESSION["backend_id"])) {
	
	require_once("class/userModulo.php");

	$usuario=new Usuarios();

	$datos=$usuario->get_usuario();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>

	<?php require_once("head.php"); ?>

	<?php require_once("header_css_tabla.php"); ?>

</head>
<body>
	
	<div class="container-fluid"><!--div fluid 1-->
		<?php require_once("menu_principal.php") ?>

			<div class="container-fluid"><!--divfluid 2-->

				<div class="row"><!--divrow-->

					<div class="col-sm-2">					

					<?php require_once("menu_lateral.php") ?>
								
					</div>

					<div class="col-sm-10">

					<div class="panel-usuario">
						<ol class="breadcrumb">
						  <li><span class="glyphicon glyphicon-home"></span><a href="<?php echo Conectar::ruta();?>home.php"> Principal</a></li>
						  <li class=><span class="glyphicon glyphicon-user"></span><a href="<?php echo Conectar::ruta();?>usuarios.php">Usuario</a></li>
						  <li class=><span class="glyphicon glyphicon-user"></span><a href="<?php echo Conectar::ruta();?>agregar_usuario.php""> Crear Usuario</a></li>
						  
						</ol>
					</div><!--panel usuario-->

					<div class="panel panel-primary">
					 <div class="panel-heading">
					    <h3 class="panel-title">Lista Usuarios</h3>
					  </div>
					  <div class="panel-body">

					    <table class="table table-bordered" id="myTabla">

					    <thead>
					    <tr>
					    	<th>ID</th>
					    	<th>DUI</th>
					    	<th>Nombre</th>
					    	<th>Cargo</th>
					    	<th>Nivel</th>
					    	<th>Fecha Ingreso</th>
					    	<th><center>Acciones</center></th>
					    </tr>
					    </thead>
					    <tbody>
					    	<?php for($i=0; $i<sizeof($datos); $i++){ ?>
					    	<tr>
					    	<td><?php echo $datos[$i]["id"]; ?></td>
					    	<td><?php echo $datos[$i]["dui"]; ?></td>
					    	<td><?php echo $datos[$i]["nombre"]; ?></td>
					    	<td><?php echo $datos[$i]["cargo"]; ?></td>
					    	<td><?php echo $datos[$i]["nivel"]; ?></td>
					    	<td><?php echo Conectar::invierte_fecha($datos[$i]["fechaIngreso"]); ?></td>
					    	<td><center><a class="btn btn-info"   href="<?php echo Conectar::ruta();?>editar_usuario.php?id_usuario=<?php echo $datos[$i]["id"];?>">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Editar</a> <a class="btn btn-danger" href="<?php echo Conectar::ruta();?>eliminar_usuario.php?id_usuario=<?php echo $datos[$i]["id"];?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> Eliminar</a></center></td>


					    	</tr>
					    	<?php }?>
					    </tbody>
					    	
					    </table>

					  </div>
					</div>
						
					</div><!--col sm 8-->
						
					</div><!--divrow-->
					
				</div><!--div fluid2-->
		
	<?php require_once("footer_js_tabla.php");  ?>			
	</div><!--div fluid1-->


</body>
</html>

<?php } else{

	header("Location:".Conectar::ruta()."index.php");
	}?>
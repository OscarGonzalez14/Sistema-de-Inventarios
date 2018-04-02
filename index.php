<?php
require_once("class/config.php");

require_once("class/userModulo.php");

$usuario= new Usuarios();

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){

	$usuario->login();
	exit();
}


?>

<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<?php require_once("head.php"); ?>

	<script>
function muestraPass() {
    var x = document.getElementById("contra");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

</head>
<body class="pagina_index">


 	
 	<div class="container-fluid">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-8 col-sm-offset-3">
 					<h2>AESYSTEM INVENTORY</h2>
 				</div>
 				<br>
 				<br>

 			<div>
 				
 			</div>
 			</div><!--row-->
 		</div><!--Container-->

 		<div class="container">
 			<div class="row">
 				<div class="col-sm-5 col-sm-offset-3">
 					<form action="" method="post">
 						<div class="form-group">
 							<label for="">Usuario</label>
 							<input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off">
 						</div>

 						<div class="form-group">
 							<label for="">Password</label>
 							<input type="password" name="password" id="contra" class="form-control" placeholder="Contraseña" autocomplete="off">
 							<input type="checkbox" onclick="muestraPass()"> Mostrar Contraseña
 						</div>
						<input type="hidden" name="grabar" value="si"/>	
 						<button type="submit" class="btn btn-default"> LOGIN</button>

 					</form>
 				</div>
 			</div>
 		</div><!--container-->

 	</div><!--Container Fluid-->

 	

	
</body>
</html>
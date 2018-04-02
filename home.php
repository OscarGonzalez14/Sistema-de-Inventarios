<?php

require_once("class/config.php");
//require_once("class/userModulo.php");

if(isset($_SESSION["backend_id"])){


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php require_once("head.php"); ?>
</head>
<body>
     <div class="container-fluid">

     <?php require_once("menu_principal.php") ?>  
     </div>
         <div class="container-fluid">
             <div class="row">

              <div class="col-sm-2">

     <?php require_once("menu_lateral.php") ?>
                
              </div>
               
             </div>

        </div>
	    
</body>
</html>

<?php
}else{
  header("Location:".Conectar::ruta()."index.php");
}
?>
<!--Inicio de Menu Principal-->
 <!--menu bootstrap-->
    <nav class="navbar navbar-default">
      
  <div class="container-fluid navbar_menu contenedor-menu-principal">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">AESYSTEM INVENTORIES</a>
      <!--<img src="public/images/logo_vertical.jpg">-->
    </div>
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
       
       </form>

      <ul class="nav navbar-nav navbar-right">
       
        
          <li><a><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Bienvenido ADMINISTRADOR </span></a></li>
          
            <!--<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mi Perfil</a></li>-->
            
            <li><a href="<?php echo Conectar::ruta();?>logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesión</a></li>
          </ul>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
 <!--fin menu bootstrap-->
 

<!--Fin de Menu Principal-->
<?php


class Usuarios extends Conectar
{
	
	public function login(){

		$conectar=parent::conexion();
		parent::set_names();

		if (empty($_POST["usuario"]) and empty($_POST["password"])){
			
			header("Location:".Conectar::ruta()."index.php");
			exit();
		}

		$sql="select * from usuarios where usuario=? and password=?";
		
		$sql=$conectar->prepare($sql);

		$sql->bindValue(1, $_POST["usuario"]);
		$sql->bindValue(2, $_POST["password"]);
		$sql->execute();
		$resultado=$sql->fetch(PDO::FETCH_ASSOC);

		if (is_array($resultado)==true and count($resultado)>=1){

			$_SESSION["backend_id"]=$resultado["id"];

			header("Location:".Conectar::ruta()."home.php");
			exit();
			
		}else{

			header("Location:".Conectar::ruta()."index.php?m=1");

			exit();
		}


	}
// Metodo que permite listar los usuarios
	public function get_usuario(){

		$conectar=parent::conexion();
		parent::set_names();

		$sql="select * from usuarios;";

		$sql=$conectar->prepare($sql);

		$sql->execute();

		return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


	}

	public function agregar_usuario(){

		$conectar=parent::conexion();
		parent::set_names();

		// si los campos estan vacios redireccionar al formulario

		if (empty($_POST["dui"]) or empty($_POST["nombre"]) or empty($_POST["cargo"]) or empty($_POST["usuario"]) or empty($_POST["nivel"]) or empty($_POST["password"]) or empty($_POST["password2"]) or empty($_POST["nivel"])) {
			
			header("Location:".Conectar::ruta()."agregar_usuario.php?m=1");
			exit();

		}

$sql="insert into usuarios
         values(null,?,?,?,?,?,?,?,now());";

        $sql=$conectar->prepare($sql);

        $sql->bindValue(1,$_POST["nombre"]);
        $sql->bindValue(2,$_POST["dui"]);
        $sql->bindValue(3,$_POST["cargo"]);
        $sql->bindValue(4,$_POST["usuario"]);
        $sql->bindValue(5,$_POST["nivel"]);
        $sql->bindValue(6,$_POST["password"]);
        $sql->bindValue(7,$_POST["password2"]);

        $sql->execute();
        $resultado=$sql->fetch(PDO::FETCH_ASSOC);

        header("Location:".Conectar::ruta()."agregar_usuario.php?m=2");
        exit();
      }


      public function get_usuario_por_id($id_usuario){

      	$conectar=parent::conexion();
      	parent::set_names();

      	$sql="select*from usuarios where id=?";

      	$sql=$conectar->prepare($sql);

      	$sql->bindValue(1,$id_usuario);
      	$sql->execute();

      	return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


      }


      /*public function editar_usuario(){

      	$conectar=parent::conexion();
      	parent::set_names();

      	   if (empty($_POST["dui"]) or empty($_POST["nombre"]) or empty($_POST["cargo"]) or empty($_POST["usuario"]) or empty($_POST["nivel"]) or empty($_POST["password"]) or empty($_POST["password2"]) or empty($_POST["nivel"])) {
			
			header("Location:".Conectar::ruta()."editar_usuario.php?id_usuario=".$_POST["id_usuario"]."&m=1");
			exit();

		}
		$sql="update usuarios set 

		nombre=?,dui=?,cargo=?,usuario=?,nivel=?,password=?,password2=?
		where id_usuario=?
		";

		$sql=$conectar->prepare($sql);

		$sql->bindValue(1,$POST["nombre"]);
		$sql->bindValue(2,$POST["dui"]);
		$sql->bindValue(3,$POST["cargo"]);
		$sql->bindValue(4,$POST["usuario"]);
		$sql->bindValue(5,$POST["nivel"]);
		$sql->bindValue(6,$POST["password"]);
		$sql->bindValue(7,$POST["password2"]);
		$sql->bindValue(8,$POST["id_usuario"]);

		$sql->execute();

		$resultado=$sql->fetch(PDO::FETCH_ASSOC);

		header("Location:".Conectar::ruta()."editar_usuario.php?id_usuario=".$_POST["id_usuario"]."&m=2");
        exit();

      }*/
    public function editar_usuario(){

        $conectar=parent::conexion();

        parent::set_names();

		if (empty($_POST["nombre"]) or empty($_POST["dui"]) or empty($_POST["cargo"]) or empty($_POST["usuario"]) or empty($_POST["nivel"]) or empty($_POST["password"]) or empty($_POST["password2"])) {
			
			header("Location:".Conectar::ruta()."editar_usuario.php?id_usuario=".$_POST["id"]."&m=1");
			exit();

		}

        $sql="update usuarios set 
        
        nombre=?,
        dui=?,
        cargo=?,
        usuario=?,
        nivel=?,
        password=?,
        password2=?,
        where 
        id=?
        ";

        $sql=$conectar->prepare($sql);

        $sql->bindValue(1,$_POST["nombre"]);
        $sql->bindValue(2,$_POST["dui"]);
        $sql->bindValue(3,$_POST["cargo"]);
        $sql->bindValue(4,$_POST["usuario"]);
        $sql->bindValue(5,$_POST["nivel"]);
        $sql->bindValue(6,$_POST["password"]);
        $sql->bindValue(7,$_POST["password2"]);
        $sql->bindValue(8,$_POST["id"]);

        $sql->execute();

        $resultado=$sql->fetch(PDO::FETCH_ASSOC);

        header("Location:".Conectar::ruta()."editar_usuario.php?id_usuario=".$_POST["id"]."&m=2");
        exit();
      }

      public function eliminar_usuario($id_usuario){

      	$conectar=parent::conexion();
      	parent::set_names();

      	$sql="delete from usuarios where id=?";

      	$sql=$conectar->prepare($sql);

      	$sql->bindValue(1,$id_usuario);
      	
      	$sql->execute();
      	
      	return $resultado=$sql->fetch(PDO::FETCH_ASSOC);





      }

	}




?>
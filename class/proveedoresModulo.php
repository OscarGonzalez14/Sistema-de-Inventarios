<?php
	
	class Proveedores extends Conectar{

		public function get_proveedores(){

			$conectar=parent::conexion();
			parent::set_names();

			$sql="select*from Proveedores;";

			$sql=$conectar->prepare($sql);
			$sql->execute();

			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


		}

		public function agregar_proveedor(){

			$conectar=parent::conexion();
			parent::set_names();

			if (empty($_POST["nombreProveedor"]) or empty($_POST["telefonoProveedor"]) or empty($_POST["correo"]) or empty($_POST["nom_contacto"])){

				header("Location:".Conectar::ruta()."agregar_proveedor.php?m=1");
				exit();
			}

			$sql="insert into Proveedores 
			values(null,?,?,?,?);";

			$sql=$conectar->prepare($sql);

			$sql->bindValue(1,$_POST["nombreProveedor"]);
			$sql->bindValue(2,$_POST["telefonoProveedor"]);
			$sql->bindValue(3,$_POST["correo"]);
			$sql->bindValue(4,$_POST["nom_contacto"]);
			
	        $sql->execute();

	        $resultado=$sql->fetch(PDO::FETCH_ASSOC);

			header("Location:".Conectar::ruta()."agregar_proveedor.php?m=2");
			exit();

		}


	}

?>
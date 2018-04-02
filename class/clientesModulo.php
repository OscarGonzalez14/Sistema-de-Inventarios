<?php

	class Clientes extends Conectar{

		public function get_clientes(){

			$conectar=parent::conexion();

			parent::set_names();

			$sql="select*from  clientes order by fecha_cli ASC";

			$sql=$conectar->prepare($sql);

			$sql->execute();

			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

		}


		public function agregar_cliente(){

			$conectar=parent::conexion();

			parent::set_names();


			if(empty($_POST["nombre"]) or empty($_POST["telefono"]) or empty($_POST["direccion"]) or empty($_POST["correo"])){

				header("Location:".Conectar::ruta()."agregar_cliente.php?m=1");
				exit();
			}

			$sql="insert into clientes
			values(null,?,?,?,?,now());";

			$sql=$conectar->prepare($sql);
			$sql->bindValue(1,$_POST["nombre"]);
			$sql->bindValue(2,$_POST["telefono"]);
			$sql->bindValue(3,$_POST["direccion"]);
			$sql->bindValue(4,$_POST["correos"]);
			$sql->execute();

			$resultado=$sql->fetch(PDO::FETCH_ASSOC);

			header("Location:".Conectar::ruta()."agregar_cliente.php?m=2");

			exit();
		}

	}

?>
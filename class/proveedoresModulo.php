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

			
		}


	}

?>
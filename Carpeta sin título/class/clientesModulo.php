<?php

	class Clientes extends Conectar{

		public function get_clientes(){

			$conectar=parent::conexion();

			parent::set_names();

			$sql="select*from  clientes";

			$sql=$conectar->prepare($sql);

			$sql->execute();

			return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

		}

	}

?>
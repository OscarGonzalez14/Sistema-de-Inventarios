<?php 
Class Configuracion extends Conectar{

	public function get_configuracion(){
		$conectar=parent::conexion();
		parent::set_names();

		$sql="select*from configuracion;";
		$sql=$conectar->prepare($sql);
		$sql->execute();
		return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


	}
}


?>
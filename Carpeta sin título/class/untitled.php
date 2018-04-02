      public function get_usuario_por_id($id_usuario){

         $conectar=parent::conexion();
         parent::set_names();

         $sql="select * from usuarios where id=?";

         $sql=$conectar->prepare($sql);

         $sql->bindValue(1,$id_usuario);
         $sql->execute();

         return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }